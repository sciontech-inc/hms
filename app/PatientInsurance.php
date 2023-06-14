<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientInsurance extends Model
{
    protected $fillable = [
        'patient_id',
        'provider',
        'type',
        'policy_no',
        'group_policy_no',
        'insurance_notes',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
