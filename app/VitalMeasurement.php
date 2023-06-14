<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VitalMeasurement extends Model
{
    protected $fillable = [
        'patient_id',
        'date',
        'blood_pressure',
        'heart_rate',
        'temperature',
        'respiratory_rate',
        'oxygen_saturation',
        'pulse_rate',
        'remarks',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
