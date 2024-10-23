<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmergencyPatient;
use App\Models\EpAssessment;
use App\Models\Notification;
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
        ]);

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
            'user_id' => $user->user_id, // Use the user_id from the logged-in user
            'emergency_patient_id' => $emergencyPatientId,
        ]);

        //Getting Notification
        Notification::create([
            'notification_type' => 'success',
            'notification_message' => 'Emergency Patient Assessment was added successfully. Name: ' . $patientName,
            'user_id' => $user->user_id, // Set the user_id from the authenticated user
        ]);

        return redirect()->back()->with('success', 'Emergency Patient Assessment was added successfully.');
    }

    public function ep_assessment_update(Request $request, $ep_assessment_id)
    {
        info($request->all());
        $validated = $request->validate([
            'ep_assessment_date' => 'required|date',
            'ep_assessment_time' => 'required',
            'ep_assessment_assessments' => 'required|string',
        ]);

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
