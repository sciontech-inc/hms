<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialHistory extends Model
{
    protected $fillable = [
        'patient_id',
        'record',
        'category',
        'details',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
