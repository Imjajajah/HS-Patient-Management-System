<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyPatient extends Model
{
    use HasFactory;

    protected $table = 'emergency_patients';

    protected $primaryKey = 'emergency_patient_id';

    protected $guarded = [];

    public function emergency_information()
    {
        return $this->belongsTo(EmergencyInformation::class, 'emergency_information_id');
    }

    public function patients()
    {
        return $this->hasMany(Patient::class, 'emergency_patient_id');
    }

    public function vital_signs()
    {
        return $this->hasMany(VitalSigns::class, 'emergency_patient_id');
    }

    public function emergency_logs()
    {
        return $this->hasMany(EmergencyLogs::class, 'emergency_patient_id');
    }

    public function diagnosis_and_procedures()
    {
        return $this->hasMany(DiagnosisAndProcedure::class, 'emergency_patient_id');
    }

    public function ep_medical_histories()
    {
        return $this->hasMany(EpMedicalHistory::class, 'emergency_patient_id');
    }

    public function ep_assessments()
    {
        return $this->hasMany(EpAssessment::class, 'emergency_patient_id');
    }
}
