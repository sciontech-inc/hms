<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineTaken extends Model
{
    protected $fillable = [
        'patient_id',
        'medicine_name',
        'medicine_doses',
        'routes_of_administration',
        'medicine_type',
        'medicine_duration',
        'medicine_reason',
        'medicine_compliance',
        'medicine_remarks',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
