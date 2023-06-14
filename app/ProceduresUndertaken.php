<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProceduresUndertaken extends Model
{
    protected $fillable = [
        'patient_id',
        'procedure_date',
        'procedure_name',
        'procedure_description',
        'reason',
        'results',
        'pre_procedure_preparation',
        'post_procedure_preparation',
        'complications',
        'sedation_used',
        'remarks',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
