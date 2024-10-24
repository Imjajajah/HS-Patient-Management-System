<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmergencyPatient;
use App\Models\EpAssessment;
use App\Models\Notification;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EpAssessmentController extends Controller
{
    public function ep_assessment_store(Request $request)
    {
        info($request->all());

        $validated = $request->validate([
            'ep_assessment_date' => 'required|date', // Ensure a valid date is provided
            'ep_assessment_time' => 'required|date_format:H:i', // Ensure time is in the correct format
            'ep_assessment_assessments' => 'required|string',
            'ep_assessment_test' => ['nullable', 'string', 'max:255'], // Allows test name with a max length of 255
            'ep_assessment_test_instruction' => ['nullable', 'string', 'max:255'], // Allows instruction with max length of 255
            'ep_assessment_priority' => ['nullable', 'string', 'max:255'], // Allows test name with a max length of 255
            'ep_test_email' => ['nullable', 'email', 'max:255'], // Validates email format
        ]);

        $filenameToStore = null; // Initialize the filename variable

        if ($request->hasFile('order_test_file')) {
            // Validate for image or PDF
            $request->validate([
                "order_test_file" => 'mimes:jpeg,png,bmp,tiff,pdf|max:4096'
            ]);

            $file = $request->file('order_test_file');
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;

            // Store the file based on its type
            if (in_array($extension, ['jpeg', 'png', 'bmp', 'tiff'])) {
                $file->storeAs('public/emergency_patient_assessment/image', $filenameToStore);
            } elseif ($extension === 'pdf') {
                $file->storeAs('public/emergency_patient_assessment/pdf', $filenameToStore);
            }
        }

        // Convert 24-hour time to 12-hour format with AM/PM
        if (!empty($validated['ep_assessment_time'])) {
            $dateTime = \DateTime::createFromFormat('H:i', $validated['ep_assessment_time']);
            if ($dateTime) {
                $validated['ep_assessment_time'] = $dateTime->format('g:i A');
            }
        }

        // Convert dates to 'Y-m-d' format
        $validated['ep_assessment_date'] = $request->input('ep_assessment_date');

        // Initialize emergencyPatientId
        $emergencyPatientId = $request->input('emergency_patient_id');

        // Fetch the emergency patient data
        $emergencyPatient = EmergencyPatient::findOrFail($emergencyPatientId);

        // Construct the full patient name
        $patientName = implode(' ', array_filter([
            $emergencyPatient->emergency_first_name,
            $emergencyPatient->emergency_middle_name,
            $emergencyPatient->emergency_last_name,
            $emergencyPatient->emergency_extension,
        ]));

        // Fetch the currently logged-in user
        $user = Auth::user();

        // Create Vital Signs
        EpAssessment::create([
            'ep_assessment_date' => $validated['ep_assessment_date'],
            'ep_assessment_time' => $validated['ep_assessment_time'],
            'ep_assessment_assessments' => $validated['ep_assessment_assessments'],
            'ep_assessment_test' => $validated['ep_assessment_test'],
            'ep_assessment_test_instruction' => $validated['ep_assessment_test_instruction'],
            'ep_assessment_priority' => $validated['ep_assessment_priority'],
            'order_test_file' => $filenameToStore,
            'ep_test_email' => $validated['ep_test_email'],
            'user_id' => $user->user_id, // Use the user_id from the logged-in user
            'emergency_patient_id' => $emergencyPatientId,
        ]);

        //Getting Notification
        Notification::create([
            'notification_type' => 'success',
            'notification_message' => 'Emergency Patient Assessment was added successfully. Name: ' . $patientName,
            'user_id' => $user->user_id, // Set the user_id from the authenticated user
        ]);

        // Check if the order_test_file is empty and download the PDF
        if (is_null($filenameToStore)) {
            // Generate the PDF for the diagnostic test order
            $pdf = $this->downloadLabRequest(EpAssessment::latest()->first()->ep_assessment_id, false);  // Pass a flag to return the PDF instance

            // Save the generated PDF to a file on the server
            $filenameToStore = 'Diagnostic_Test_Order_' . EpAssessment::latest()->first()->ep_assessment_id . '.pdf';
            $path = public_path('storage/emergency_patient_assessment/pdf/' . $filenameToStore);

            // Save the PDF content to the server storage
            file_put_contents($path, $pdf->output());  // Save to the server

            // Update the created assessment record with the new filename in the database
            EpAssessment::latest()->first()->update(['order_test_file' => $filenameToStore]);
            // Check if the PDF was generated successfully
            // if ($path) {
            //     // Prepare data for the Node.js API
            //     $nodeApiUrl = 'http://localhost:3000/send-assessment-email'; // Change the URL to your Node.js endpoint
            //     $client = new Client();
            //     $response = $client->post($nodeApiUrl, [
            //         'json' => [
            //             'email' => $validated['ep_test_email'],
            //             'pdfFilePath' => $path,
            //         ]
            //     ]);
            // }

            // Trigger download for the user
            return response()->download($path, $filenameToStore);  // Download the file to user's PC
        }
        // Regular case if there's already a file uploaded, simply return success
        return redirect()->back()->with('success', 'Emergency Patient Assessment was added successfully.');

    }


    public function downloadLabRequest($ep_assessment_id, $forDownload = true)
    {
        $ep_assessment = EpAssessment::with(['emergency_patients', 'users'])->findOrFail($ep_assessment_id);

        // Generate the PDF
        $pdf = Pdf::loadView('components.diagnostic_test_order', compact('ep_assessment'));

        // If $forDownload is true, return the PDF for download; otherwise, return the PDF instance
        if ($forDownload) {
            $filename = 'Diagnostic_Test_Order_' . $ep_assessment_id . '.pdf';
            return $pdf->download($filename);
        }

        // Return the PDF instance (used for output when saving locally)
        return $pdf;
    }

    public function downloadAssessmentPDF($id)
    {
        // Fetch the assessment data
        $assessment = EpAssessment::with('emergency_patients', 'users')->findOrFail($id);

        // Load the view and pass the data
        $pdf = Pdf::loadView('pdf.assessment', compact('assessment'));

        // Return the PDF as a download
        return $pdf->download('assessment_' . $assessment->ep_assessment_id . '.pdf');
    }

    public function ep_assessment_update(Request $request, $ep_assessment_id)
    {
        info($request->all());
        $validated = $request->validate([
            'ep_assessment_date' => 'required|date',
            'ep_assessment_time' => 'required',
            'ep_assessment_assessments' => 'required|string',
            'ep_assessment_test' => ['nullable', 'string', 'max:255'], // Allows test name with a max length of 255
            'ep_assessment_test_instruction' => ['nullable', 'string', 'max:255'], // Allows instruction with max length of 255
            'ep_assessment_priority' => ['nullable', 'string', 'max:255'], // Allows test name with a max length of 255
            'ep_test_email' => ['nullable', 'email', 'max:255'], // Validates email format
        ]);

        if ($request->hasFile('order_test_file')) {
            // Validate for image or PDF
            $request->validate([
                "order_test_file" => 'mimes:jpeg,png,bmp,tiff,pdf|max:4096'
            ]);

            $file = $request->file('order_test_file');
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;

            // Store the file based on its type (image or PDF)
            if (in_array($extension, ['jpeg', 'png', 'bmp', 'tiff'])) {
                $file->storeAs('public/emergency_patient_assessment/image', $filenameToStore);
            } elseif ($extension === 'pdf') {
                $file->storeAs('public/emergency_patient_assessment/pdf', $filenameToStore);
            }

            // Store the filename in the validated data
            $validated['order_test_file'] = $filenameToStore;
        }

        // Convert 24-hour time to 12-hour format with AM/PM
        if (!empty($validated['ep_assessment_time'])) {
            $dateTime = \DateTime::createFromFormat('H:i', $validated['ep_assessment_time']);
            if ($dateTime) {
                $validated['ep_assessment_time'] = $dateTime->format('g:i A');
            }
        }

        // Convert dates to 'Y-m-d' format
        $validated['ep_assessment_date'] = $request->input('ep_assessment_date');

        $ep_assessment = EpAssessment::findOrFail($ep_assessment_id);

        // Fetch the currently logged-in user
        $user = Auth::user(); // Directly get the currently authenticated user

        // Assuming the emergency patient ID is available in the route
        $emergencyPatient = EmergencyPatient::findOrFail($ep_assessment->emergency_patient_id);

        // Construct the full patient name
        $patientName = implode(' ', array_filter([
            $emergencyPatient->emergency_first_name,
            $emergencyPatient->emergency_middle_name,
            $emergencyPatient->emergency_last_name,
            $emergencyPatient->emergency_extension
        ]));

        // Prepare the logs array to capture all changes
        $logs = [];

        //  // Compare each field and log changes
        // foreach ($validated as $key => $newValue) {
        //     $oldValue = $ep_medical_history->$key;

        //     // Only log if there's a change
        //     if ($oldValue !== $newValue) {
        //         $logs[] = [
        //             'emergency_date_logs' => $ep_medical_history->diagnosis_date,
        //             'emergency_time_logs' => $ep_medical_history->diagnosis_time,
        //             'patient_name' => $patientName,
        //             'action' => 'edited', // or 'inputted' based on your needs
        //             'field' => ucfirst(str_replace('_', ' ', $key)), // Convert 'B_P' to 'B P'
        //             'old_value' => $oldValue,
        //             'new_value' => $newValue,
        //             'message' => "Field '{$key}' changed from '{$oldValue}' to '{$newValue}'.",
        //             'user_id' => $user->user_id, // Get the currently logged-in user's ID
        //             'emergency_patient_id' => $emergencyPatient->emergency_patient_id,
        //             'created_at' => now(),
        //             'updated_at' => now(),
        //         ];
        //     }
        // }

        // // Insert all logs into the database
        // if (!empty($logs)) {
        //     EmergencyLogs::insert($logs);
        // }

        $ep_assessment->update($validated);

        //Getting Notification
        Notification::create([
            'notification_type' => 'success',
            'notification_message' => 'Medical assessment updated successfully. Name: ' . $patientName,
            'user_id' => $user->user_id, // Set the user_id from the authenticated user
        ]);

        return redirect()->back()->with('success', 'Medical assessment updated successfully');
    }
}
