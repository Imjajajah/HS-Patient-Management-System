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
            'ep_assessment_assessments' => 'required|string|max:255',
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
}
