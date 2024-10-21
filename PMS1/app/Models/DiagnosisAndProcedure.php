<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosisAndProcedure extends Model
{
    use HasFactory;

    protected $table = 'diagnosis_and_procedures';

    protected $primaryKey = 'diagnosis_and_procedue_id';

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function emergency_patients()
    {
        return $this->belongsTo(EmergencyPatient::class, 'emergency_patient_id');
    }
}
