<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;

    protected $table = 'emergency_logs';

    protected $primaryKey = 'emergency_logs_id';

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
