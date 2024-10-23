<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmergencyLogs;
use App\Models\EmergencyPatient;
use App\Models\EpMedicalHistory;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EpMedicalHistoryController extends Controller
{
    public function ep_medical_history_store(Request $request)
    {
        info($request->all());

        $validated = $request->validate([
            'ep_medical_history_date' => 'required|date', // Ensure a valid date is provided
            'ep_medical_history_time' => 'required|date_format:H:i', // Ensure time is in the correct format
            'ep_medical_history_diagnosis' => 'required|string',
            'ep_medical_history_treatment' => 'required|string',
            'ep_medical_history_surgery' => 'required|string',
            'ep_medical_history_medications' => 'required|string',
        ]);

        // Convert 24-hour time to 12-hour format with AM/PM
        if (!empty($validated['ep_medical_history_time'])) {
            $dateTime = \DateTime::createFromFormat('H:i', $validated['ep_medical_history_time']);
            if ($dateTime) {
                $validated['ep_medical_history_time'] = $dateTime->format('g:i A');
            }
        }

        // Convert dates to 'Y-m-d' format
        $validated['ep_medical_history_date'] = $request->input('ep_medical_history_date');

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
        EpMedicalHistory::create([
            'ep_medical_history_date' => $validated['ep_medical_history_date'],
            'ep_medical_history_time' => $validated['ep_medical_history_time'],
            'ep_medical_history_diagnosis' => $validated['ep_medical_history_diagnosis'],
            'ep_medical_history_treatment' => $validated['ep_medical_history_treatment'],
            'ep_medical_history_surgery' => $validated['ep_medical_history_surgery'],
            'ep_medical_history_medications' => $validated['ep_medical_history_medications'],
            'user_id' => $user->user_id, // Use the user_id from the logged-in user
            'emergency_patient_id' => $emergencyPatientId,
        ]);

        //Getting Notification
        Notification::create([
            'notification_type' => 'success',
            'notification_message' => 'Emergency Patient Medical History was added successfully. Name: ' . $patientName,
            'user_id' => $user->user_id, // Set the user_id from the authenticated user
        ]);

        return redirect()->back()->with('success', 'Emergency Patient Medical History was added successfully.');
    }

    public function ep_medical_history_update(Request $request, $ep_medical_history_id)
    {
        info($request->all());

        $validated = $request->validate([
            'ep_medical_history_date' => 'required|date',
            'ep_medical_history_time' => 'required',
            'ep_medical_history_diagnosis' => 'required|string',
            'ep_medical_history_treatment' => 'nullable|string',
            'ep_medical_history_surgery' => 'required|string',
            'ep_medical_history_medications' => 'required|string',
        ]);

        // Convert 24-hour time to 12-hour format with AM/PM
        if (!empty($validated['ep_medical_history_time'])) {
            $dateTime = \DateTime::createFromFormat('H:i', $validated['ep_medical_history_time']);
            if ($dateTime) {
                $validated['ep_medical_history_time'] = $dateTime->format('g:i A');
            }
        }

        // Convert dates to 'Y-m-d' format
        $validated['ep_medical_history_date'] = $request->input('ep_medical_history_date');

        $ep_medical_history = EpMedicalHistory::findOrFail($ep_medical_history_id);

        // Fetch the currently logged-in user
        $user = Auth::user(); // Directly get the currently authenticated user

        // Assuming the emergency patient ID is available in the route
        $emergencyPatient = EmergencyPatient::findOrFail($ep_medical_history->emergency_patient_id);

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

        $ep_medical_history->update($validated);

        //Getting Notification
        Notification::create([
            'notification_type' => 'success',
            'notification_message' => 'Medical history updated successfully. Name: ' . $patientName,
            'user_id' => $user->user_id, // Set the user_id from the authenticated user
        ]);

        return redirect()->back()->with('success', 'Medical history updated successfully');
    }
}
