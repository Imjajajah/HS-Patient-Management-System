<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Carbon;
use Illuminate\Validation\Rule;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //just getting the CSRF Token, wag pansinin haha
    {
        $patients = Patient::all();
        return view('patient_records', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/')->with('title', 'Add Patient');
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
            "dob" => ['required', 'date_format:m-d-Y'], //'date_format:m-d-Y'
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
            //
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

        function convertDateFormat($date, $format = 'm-d-Y') {
            try {
                return Carbon\Carbon::createFromFormat($format, trim($date))->format('Y-m-d');
            } catch (\Exception $e) {
                return null; // or handle the error as needed
            }
        }

        // Convert dates to 'Y-m-d' format
        $validated['dob'] = convertDateFormat($request->input('dob'));
        $validated['effective_date'] = convertDateFormat($request->input('effective_date'));
        $validated['expiration_date'] = convertDateFormat($request->input('expiration_date'));
        $validated['holder_dob'] = convertDateFormat($request->input('holder_dob'));

        Patient::create($validated);

        $request->session()->flash('success', 'New Patient was added successfully!');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return view('patient_details', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
