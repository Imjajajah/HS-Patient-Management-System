<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    // protected $fillable  = ['patient_type','first_name','middle_name',
    // 'last_name','extension','sex',
    // 'name','dob', 'age',
    // 'civil_status','dob', 'phone',
    // 'email','employment', 'nationality',
    // 'religion','street_address', 'street_address_2',
    // 'city','state', 'zip',
    // 'emergency_first_name','emergency_middle_name','emergency_last_name', 'relationship',
    // 'emergency_phone','emergency_phone_2','emergency_email', 'reason_registration',
    // 'additional_note','history_operation', 'history_note',
    // 'current_condition','condition_note',"taking_medications","medications_note", 'food_allergy',
    // 'food_allergy_note','drug_allergy', 'drug_allergy_note',
    // 'patient_smoke','patient_alcohol',
    // 'primary_holder','insurance_company','insurance_number',
    // 'effective_date','expiration_date','plan_type',
    // 'holder_first_name','holder_last_name','holder_dob',
    // 'holder_phone','holder_email','holder_street_address',
    // 'holder_street_address_2','holder_city','holder_state',
    // 'holder_zip',];

    protected $guarded = [];

    protected $casts = [
        'family_history' => 'json',
    ];

}
