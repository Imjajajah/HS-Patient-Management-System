<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmergencyPatient;
use App\Models\User;
use App\Models\Authorizations;
use App\Models\EmergencyLogs;
use App\Models\Notification;
use App\Models\VitalSigns;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class VitalSignsController extends Controller
{
    public function vital_signs_store(Request $request)
    {
        info($request->all());

        $validated = $request->validate([
            'diagnosis_date' => 'required|date', // Ensure a valid date is provided
            'diagnosis_time' => 'required|date_format:H:i', // Ensure time is in the correct format
            'B_P' => 'required|regex:/^\d{1,3}\/\d{1,3}$/', // Validate BP format (e.g., '120/80')
            'heart_rate' => 'required|integer|min:40|max:180', // Allow heart rate between 40 and 180
            'pulse_rate' => 'required|integer|min:40|max:180', // Allow pulse rate between 40 and 180
            'temperature' => 'required|numeric|between:30,45', // Allow temperature between 30 and 45 degrees Celsius
            'oxygen_saturation' => 'required|integer|between:0,100', // Allow O2 saturation between 0 and 100
            'pain_scale' => 'required|integer|between:0,10', // Pain scale should be between 0 and 10
            'respiratory_rate' => 'required|integer|min:10|max:60', // Allow respiratory rate between 0 and 50
            'respiratory_pattern' => 'required|string', // Assuming respiratory pattern is a string
            'weight' => 'required|numeric|min:0', // Weight should be a valid positive number
            'height' => 'required|numeric|min:0', // Height should be a valid positive number
            'bmi' => 'required|numeric|min:10|max:50', // Allow BMI between 10 and 50
            'vitals_note' => 'nullable|string', // Allowing this field to be optional
        ]);

        // Convert 24-hour time to 12-hour format with AM/PM
        if (!empty($validated['diagnosis_time'])) {
            $dateTime = \DateTime::createFromFormat('H:i', $validated['diagnosis_time']);
            if ($dateTime) {
                $validated['diagnosis_time'] = $dateTime->format('g:i A');
            }
        }

        // Convert dates to 'Y-m-d' format
        $validated['diagnosis_date'] = $request->input('diagnosis_date');

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
        VitalSigns::create([
            'diagnosis_date' => $validated['diagnosis_date'],
            'diagnosis_time' => $validated['diagnosis_time'],
            'B_P' => $validated['B_P'],
            'heart_rate' => $validated['heart_rate'],
            'pulse_rate' => $validated['pulse_rate'],
            'temperature' => $validated['temperature'],
            'oxygen_saturation' => $validated['oxygen_saturation'],
            'pain_scale' => $validated['pain_scale'],
            'respiratory_rate' => $validated['respiratory_rate'],
            'respiratory_pattern' => $validated['respiratory_pattern'],
            'weight' => $validated['weight'],
            'height' => $validated['height'],
            'bmi' => $validated['bmi'],
            'vitals_note' => $validated['vitals_note'],
            'emergency_patient_id' => $emergencyPatientId,
        ]);

        // Prepare logs for the newly added vital signs
        $log = [
            'emergency_date_logs' => $validated['diagnosis_date'],
            'emergency_time_logs' => $validated['diagnosis_time'],
            'patient_name' => $patientName,
            'type' => 'vital_signs_type',
            'action' => 'inputted',
            'field' => 'All',  // Since all fields are new
            'old_value' => json_encode($validated),  // Same as the new value
            'new_value' => json_encode($validated),  // Same as the old value
            'message' => "{$user->name} inputted new vital signs.",
            'user_id' => $user->user_id,
            'emergency_patient_id' => $emergencyPatientId,
        ];
        // Store the log in the database
        EmergencyLogs::create($log);

        //Getting Notification
        Notification::create([
            'notification_type' => 'success',
            'notification_message' => 'Vital was added successfully. Name: ' . $patientName,
            'user_id' => $user->user_id, // Set the user_id from the authenticated user
        ]);

        return redirect()->back()->with('success', 'Vital was added successfully');
    }


    public function vital_signs_show($vital_signs_id)
    {
        $vital_signs = VitalSigns::findOrFail($vital_signs_id);

        if (!$vital_signs) {
            return response()->json(['message' => 'Emergency Patient not found'], 404);
        }

        return view('blank6', compact('vital_signs'));
    }

    public function vital_signs_edit($vital_signs_id)
    {
        $vital_signs = VitalSigns::findOrFail($vital_signs_id);

        if (!$vital_signs) {
            return response()->json(['message' => 'Emergency Patient not found'], 404);
        }

        return view('patient_charts', [
            'vital_signs' => $vital_signs
        ]);
    }

    public function vital_signs_update(Request $request, $vital_signs_id)
    {
        info($request->all());
        $validated = $request->validate([
            'diagnosis_date' => 'required|date',
            'diagnosis_time' => 'required',
            'B_P' => 'required|string',
            'heart_rate' => 'nullable|string',
            'pulse_rate' => 'required|string',
            'temperature' => 'required|string',
            'oxygen_saturation' => 'nullable|string',
            'pain_scale' => 'nullable|string',
            'respiratory_rate' => 'required|string',
            'respiratory_pattern' => 'nullable|string',
            'weight' => 'nullable|string',
            'height' => 'nullable|string',
            'bmi' => 'nullable|string',
            'vitals_note' => 'nullable|string',
        ]);

        // Convert 24-hour time to 12-hour format with AM/PM
        if (!empty($validated['diagnosis_time'])) {
            $dateTime = \DateTime::createFromFormat('H:i', $validated['diagnosis_time']);
            if ($dateTime) {
                $validated['diagnosis_time'] = $dateTime->format('g:i A');
            }
        }

        // Convert dates to 'Y-m-d' format
        $validated['diagnosis_date'] = $request->input('diagnosis_date');

        $vital_signs = VitalSigns::findOrFail($vital_signs_id);

        // Fetch the currently logged-in user
        $user = Auth::user(); // Directly get the currently authenticated user

        // Assuming the emergency patient ID is available in the route
        $emergencyPatient = EmergencyPatient::findOrFail($vital_signs->emergency_patient_id);

        // Construct the full patient name
        $patientName = implode(' ', array_filter([
            $emergencyPatient->emergency_first_name,
            $emergencyPatient->emergency_middle_name,
            $emergencyPatient->emergency_last_name,
            $emergencyPatient->emergency_extension
        ]));

        // Prepare the logs array to capture all changes
        $logs = [];

         // Compare each field and log changes
        foreach ($validated as $key => $newValue) {
            $oldValue = $vital_signs->$key;

            // Only log if there's a change
            if ($oldValue !== $newValue) {
                $field = ucfirst(str_replace('_', ' ', $key)); // Convert 'B_P' to 'B P'

                $logs[] = [
                    'emergency_date_logs' => $vital_signs->diagnosis_date,
                    'emergency_time_logs' => $vital_signs->diagnosis_time,
                    'patient_name' => $patientName,
                    'type' => 'vital_signs_type',
                    'action' => 'edited', // or 'inputted' based on your needs
                    'field' => $field, // Convert 'B_P' to 'B P'
                    'old_value' => $oldValue,
                    'new_value' => $newValue,
                    'message' => "Field '{$field}' changed from '{$oldValue}' to '{$newValue}'.",
                    'user_id' => $user->user_id, // Get the currently logged-in user's ID
                    'emergency_patient_id' => $emergencyPatient->emergency_patient_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // Insert all logs into the database
        if (!empty($logs)) {
            EmergencyLogs::insert($logs);
        }

        $vital_signs->update($validated);

        //Getting Notification
        Notification::create([
            'notification_type' => 'success',
            'notification_message' => 'Vital signs updated successfully. Name: ' . $patientName,
            'user_id' => $user->user_id, // Set the user_id from the authenticated user
        ]);

        return redirect()->back()->with('success', 'Vital signs updated successfully');
    }
}
