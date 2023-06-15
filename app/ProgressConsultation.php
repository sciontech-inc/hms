<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgressConsultation extends Model
{
    protected $fillable = [
        'patient_id',
        'progress_date',
        'progress_title',
        'progress_notes',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
