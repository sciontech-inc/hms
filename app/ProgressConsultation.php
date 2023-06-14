<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgressConsultation extends Model
{
    protected $fillable = [
        'patient_id',
        'date',
        'title',
        'notes',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
