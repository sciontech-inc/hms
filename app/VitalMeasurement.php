<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VitalMeasurement extends Model
{
    protected $fillable = [
        'patient_id',
        'vital_date',
        'vital_time',
        'blood_pressure',
        'heart_rate',
        'temperature',
        'respiratory_rate',
        'oxygen_saturation',
        'pulse_rate',
        'vital_remarks',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
