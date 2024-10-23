<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DiagnosisAndProcedure;
use App\Models\EmergencyPatient;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DiagnosisAndProcedureController extends Controller
{
    public function diagnosis_and_procedure_store(Request $request)
    {
        info($request->all());

        $validated = $request->validate([
            'diagnosis_and_procedure_date' => 'required|date', // Ensure a valid date is provided
            'diagnosis_and_procedure_time' => 'required|date_format:H:i', // Ensure time is in the correct format
            'impairment' => 'nullable|string|max:255',
            'activity_restriction' => 'nullable|string|max:255',
            'personal_factor' => 'nullable|string|max:255',
            'environmental_factor' => 'nullable|string|max:255',
            'diagnosis' => 'required|string|min:5|max:500', // Mandatory with length limits
            'prognosis' => 'required|string|min:5|max:500', // Mandatory with length limits
        ]);

        // Convert 24-hour time to 12-hour format with AM/PM
        if (!empty($validated['diagnosis_and_procedure_time'])) {
            $dateTime = \DateTime::createFromFormat('H:i', $validated['diagnosis_and_procedure_time']);
            if ($dateTime) {
                $validated['diagnosis_and_procedure_time'] = $dateTime->format('g:i A');
            }
        }

        // Convert dates to 'Y-m-d' format
        $validated['diagnosis_and_procedure_date'] = $request->input('diagnosis_and_procedure_date');

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
        DiagnosisAndProcedure::create([
            'diagnosis_and_procedure_date' => $validated['diagnosis_and_procedure_date'],
            'diagnosis_and_procedure_time' => $validated['diagnosis_and_procedure_time'], // Use the 12-hour format for storage/display
            'impairment' => $validated['impairment'],
            'activity_restriction' => $validated['activity_restriction'],
            'personal_factor' => $validated['personal_factor'],
            'environmental_factor' => $validated['environmental_factor'],
            'diagnosis' => $validated['diagnosis'],
            'prognosis' => $validated['prognosis'],
            'user_id' => $user->user_id, // Use the user_id from the logged-in user
            'emergency_patient_id' => $emergencyPatientId,
        ]);

        //Getting Notification
        Notification::create([
            'notification_type' => 'success',
            'notification_message' => 'Diagnosis and Procedure was added successfully. Name: ' . $patientName,
            'user_id' => $user->user_id, // Set the user_id from the authenticated user
        ]);

        return redirect()->back()->with('success', 'Diagnosis and Procedure was added successfully.');
    }

    public function diagnosis_and_procedure_update(Request $request, $diagnosis_and_procedure_id)
    {
        info($request->all());

        $validated = $request->validate([
            'diagnosis_and_procedure_date' => 'required|date', // Ensure a valid date is provided
            'diagnosis_and_procedure_time' => 'required|date_format:H:i', // Ensure time is in the correct format
            'impairment' => 'nullable|string|max:255',
            'activity_restriction' => 'nullable|string|max:255',
            'personal_factor' => 'nullable|string|max:255',
            'environmental_factor' => 'nullable|string|max:255',
            'diagnosis' => 'required|string|min:5|max:500', // Mandatory with length limits
            'prognosis' => 'required|string|min:5|max:500', // Mandatory with length limits
        ]);

        // Convert 24-hour time to 12-hour format with AM/PM
        if (!empty($validated['diagnosis_and_procedure_time'])) {
            $dateTime = \DateTime::createFromFormat('H:i', $validated['diagnosis_and_procedure_time']);
            if ($dateTime) {
                $validated['diagnosis_and_procedure_time'] = $dateTime->format('g:i A');
            }
        }

        // Convert dates to 'Y-m-d' format
        $validated['diagnosis_and_procedure_date'] = $request->input('diagnosis_and_procedure_date');

        $diagnosis_and_procedure = DiagnosisAndProcedure::findOrFail($diagnosis_and_procedure_id);

        // Fetch the currently logged-in user
        $user = Auth::user(); // Directly get the currently authenticated user

        // Assuming the emergency patient ID is available in the route
        $emergencyPatient = EmergencyPatient::findOrFail($diagnosis_and_procedure->emergency_patient_id);

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

        $diagnosis_and_procedure->update($validated);

        //Getting Notification
        Notification::create([
            'notification_type' => 'success',
            'notification_message' => 'Diagnosis and procedure updated successfully. Name: ' . $patientName,
            'user_id' => $user->user_id, // Set the user_id from the authenticated user
        ]);

        return redirect()->back()->with('success', 'Diagnosis and procedure updated successfully');
    }
}
