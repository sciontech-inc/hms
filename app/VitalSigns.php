<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VitalSigns extends Model
{
    protected $fillable = [
        'attendant_id',
        'patient_name',
        'sex',
        'patient_type',
        'date',
        'time',
        'blood_pressure',
        'temperature',
        'respiratory_rate',
        'pulse_rate',
        'oxygen_saturation',
        'weight',
        'height',
        'bmi',
        'notes',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
