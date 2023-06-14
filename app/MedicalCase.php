<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalCase extends Model
{
    protected $fillable = [
        'patient_id',
        'date_recorded',
        'chief_complaint',
        'diagnostic_tests',
        'diagnosis',
        'prognosis',
        'physician_notes',
        'nursing_notes',
        'discharge_summary',
        'medical_case_remarks',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
