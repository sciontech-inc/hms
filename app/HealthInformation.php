<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthInformation extends Model
{
    protected $fillable = [
        'reference_id',
        'doctor_id',
        'department_id',
        'patient_name',
        'referred_by',
        'referred_to',
        'status',
        'referred_date',
        'notes',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
