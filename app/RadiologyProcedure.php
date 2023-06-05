<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadiologyProcedure extends Model
{
    protected $fillable = [
        'patient_id',
        'patient_name',
        'procedure_type',
        'ordering_physician',
        'date',
        'time',
        'notes',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
