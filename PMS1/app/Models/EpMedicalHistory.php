<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpMedicalHistory extends Model
{
    use HasFactory;

    protected $table = 'ep_medical_histories';

    protected $primaryKey = 'ep_medical_history_id';

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
