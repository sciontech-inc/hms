<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientOtherInformation extends Model
{
    protected $fillable = [
        'patient_id',
        'oi_description',
        'oi_remarks',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
