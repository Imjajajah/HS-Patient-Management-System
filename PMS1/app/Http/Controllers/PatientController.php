<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\HealthHistories;
use App\Models\InsuranceInformation;
use Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view('admin_med.patient.records', compact('patients'));
    }

    public function indexm()
    {
        $patients = Patient::all();
        return view('admin_med.patient.recordsm', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patient_registration')->with('title', 'Add Patient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "patient_type" => ['required', 'string'],
            "first_name" => ['required', 'string', 'max:255'],
            "middle_name" => ['required', 'string', 'max:255'],
            "last_name" => ['required', 'string', 'max:255'],
            "extension" => ['nullable', 'string', 'max:10'],
            "sex" => ['required'],
            "civil_status" => ['required'],
            "dob" => ['required', 'date_format:m-d-Y'],
            "phone" => ['required', 'string', 'digits:11'],
            "email" => ['required', 'email', 'max:255'],
            "employment" => ['required', 'string'],
            "nationality" => ['required', 'string', 'max:255'],
            "religion" => ['required', 'string', 'max:255'],
            "street_address" => ['required', 'string', 'max:255'],
            "street_address_2" => ['required', 'string', 'max:255'],
            "city" => ['required', 'string', 'max:255'],
            "state" => ['required', 'string', 'max:255'],
            "zip" => ['required', 'string', 'max:10'],
            "emergency_first_name" => ['required', 'string', 'max:255'],
            "emergency_middle_name" => ['required', 'string', 'max:255'],
            "emergency_last_name" => ['required', 'string', 'max:255'],
            "relationship" => ['required', 'string', 'max:255'],
            "emergency_phone" => ['required', 'string', 'digits:11'],
            "emergency_phone_2" => ['required', 'string', 'digits:11'],
            "emergency_email" => ['required', 'email', 'max:255'],
            // Health History
            "reason_registration" => ['required', 'string'],
            "additional_note" => ['nullable', 'string'],
            "history_operation" => ['required', 'string'],
            "history_note" => ['nullable', 'string'],
            "current_condition" => ['required', 'string'],
            "condition_note" => ['nullable', 'string'],
            "taking_medications" => ['required', 'string'],
            "medications_note" => ['nullable', 'string'],
            "food_allergy" => ['required', 'string'],
            "food_allergy_note" => ['nullable', 'string'],
            "drug_allergy" => ['required', 'string'],
            "drug_allergy_note" => ['nullable', 'string'],
            "patient_smoke" => ['required', 'string'],
            "patient_alcohol" => ['required', 'string'],
            "family_history" => ['required', 'array'],
            // Insurance Information
            "primary_holder" => ['nullable', 'string'],
            "insurance_company" => ['nullable', 'string', 'max:255'],
            "insurance_number" => ['nullable', 'string', 'max:255'],
            "effective_date" => ['nullable', 'date_format:m-d-Y'],
            "expiration_date" => ['nullable', 'date_format:m-d-Y'],
            "plan_type" => ['nullable', 'string', 'max:255'],
            "holder_first_name" => ['nullable', 'string', 'max:255'],
            "holder_last_name" => ['nullable', 'string', 'max:255'],
            "holder_dob" => ['nullable', 'date_format:m-d-Y'],
            "holder_phone" => ['nullable', 'string', 'max:11'],
            "holder_email" => ['nullable', 'email', 'max:255'],
            "holder_street_address" => ['nullable', 'string', 'max:255'],
            "holder_street_address_2" => ['nullable', 'string', 'max:255'],
            "holder_city" => ['nullable', 'string', 'max:255'],
            "holder_state" => ['nullable', 'string', 'max:255'],
            "holder_zip" => ['nullable', 'string', 'max:10'],
        ]);

        $existingPatient = Patient::where('first_name', $validated['first_name'])
            ->where('middle_name', $validated['middle_name'])
            ->where('last_name', $validated['last_name'])
            ->first();

        // Check if the patient already exists based on first_name, middle_name, and last_name
        if ($existingPatient) {
            // Redirect back with an error message
            return redirect()->back()->withErrors(['duplicate' => 'A patient with this name already exists.'])->withInput();
        }

        // Convert dates to 'Y-m-d' format
        $dates = ['dob', 'effective_date', 'expiration_date', 'holder_dob'];
        foreach ($dates as $date) {
            if (!empty($validated[$date])) {
                $validated[$date] = Carbon\Carbon::createFromFormat('m-d-Y', $validated[$date])->format('Y-m-d');
            }
        }

        // Create HealthHistory, InsuranceInformation, and Patient records in one go
        $healthHistory = HealthHistories::create([
            'reason_registration' => $validated['reason_registration'],
            'additional_note' => $validated['additional_note'],
            'history_operation' => $validated['history_operation'],
            'history_note' => $validated['history_note'],
            'current_condition' => $validated['current_condition'],
            'condition_note' => $validated['condition_note'],
            'taking_medications' => $validated['taking_medications'],
            'medications_note' => $validated['medications_note'],
            'food_allergy' => $validated['food_allergy'],
            'food_allergy_note' => $validated['food_allergy_note'],
            'drug_allergy' => $validated['drug_allergy'],
            'drug_allergy_note' => $validated['drug_allergy_note'],
            'patient_smoke' => $validated['patient_smoke'],
            'patient_alcohol' => $validated['patient_alcohol'],
            'family_history' => json_encode($validated['family_history']),
        ]);

        $insuranceInformation = InsuranceInformation::create([
            'primary_holder' => $validated['primary_holder'],
            'insurance_company' => $validated['insurance_company'],
            'insurance_number' => $validated['insurance_number'],
            'effective_date' => $validated['effective_date'],
            'expiration_date' => $validated['expiration_date'],
            'plan_type' => $validated['plan_type'],
            'holder_first_name' => $validated['holder_first_name'],
            'holder_last_name' => $validated['holder_last_name'],
            'holder_dob' => $validated['holder_dob'],
            'holder_phone' => $validated['holder_phone'],
            'holder_email' => $validated['holder_email'],
            'holder_street_address' => $validated['holder_street_address'],
            'holder_street_address_2' => $validated['holder_street_address_2'],
            'holder_city' => $validated['holder_city'],
            'holder_state' => $validated['holder_state'],
            'holder_zip' => $validated['holder_zip'],
        ]);

        Patient::create([
            "patient_type" => $validated['patient_type'],
            "first_name" => $validated['first_name'],
            "middle_name" => $validated['middle_name'],
            "last_name" => $validated['last_name'],
            "extension" => $validated['extension'],
            "sex" => $validated['sex'],
            "civil_status" => $validated['civil_status'],
            "dob" => $validated['dob'],
            "phone" => $validated['phone'],
            "email" => $validated['email'],
            "employment" => $validated['employment'],
            "nationality" => $validated['nationality'],
            "religion" => $validated['religion'],
            "street_address" => $validated['street_address'],
            "street_address_2" => $validated['street_address_2'],
            "city" => $validated['city'],
            "state" => $validated['state'],
            "zip" => $validated['zip'],
            "emergency_first_name" => $validated['emergency_first_name'],
            "emergency_middle_name" => $validated['emergency_middle_name'],
            "emergency_last_name" => $validated['emergency_last_name'],
            "relationship" => $validated['relationship'],
            "emergency_phone" => $validated['emergency_phone'],
            "emergency_phone_2" => $validated['emergency_phone_2'],
            "emergency_email" => $validated['emergency_email'],
            "patient_status" => "Active",
            "health_history_id" => $healthHistory->id,
            "insurance_information_id" => $insuranceInformation->id,
        ]);

        $request->session()->flash('success', 'New Patient was added successfully!');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show($patient_id)
    {
        $patient = Patient::with(['health_histories', 'insurance_information'])->findOrFail($patient_id);

        return view('admin_med.patient.view', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($patient_id)
    {
        $patient = Patient::with(['health_histories', 'insurance_information'])->findOrFail($patient_id);

        return view('admin_med.patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $patient_id)
    {
        $validated = $request->validate([
            "dob" => ['required', 'date_format:Y-m-d'],
            "nationality" => ['required', 'string', 'max:255'],
            "religion" => ['required', 'string', 'max:255'],
            "sex" => ['required'],
            "street_address" => ['required', 'string', 'max:255'],
            "phone" => ['required', 'string', 'digits:11'],
            "civil_status" => ['required'],
            "employment" => ['required', 'string'],
            "email" => ['required', 'email', 'max:255'],
            //
            "food_allergy_note" => ['nullable', 'string'],
            "condition_note" => ['nullable', 'string'],
            "history_note" => ['nullable', 'string'],
        ]);

        $patient = Patient::findOrFail($patient_id);

        $patient->update([
            'dob' => $validated['dob'],
            'nationality' => $validated['nationality'],
            'religion' => $validated['religion'],
            'sex' => $validated['sex'],
            'street_address' => $validated['street_address'],
            'phone' => $validated['phone'],
            'civil_status' => $validated['civil_status'],
            'employment' => $validated['employment'],
            'email' => $validated['email'],
        ]);

        // Update health history data
        // If health_history_id is present, update the health history record
        if ($patient->health_history_id) {
            $healthHistory = HealthHistories::find($patient->health_history_id);
            if ($healthHistory) {
                $healthHistory->update([
                    'food_allergy_note' => $validated['food_allergy_note'],
                    'condition_note' => $validated['condition_note'],
                    'history_note' => $validated['history_note'],
                ]);
            }
        }

        return redirect('/dashboard')->with('message', 'Patient was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
