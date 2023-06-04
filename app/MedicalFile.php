<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalFile extends Model
{
    protected $fillable = [
        'user_id',
        'patient_id',
        'filename',
        'file',
        'password',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
