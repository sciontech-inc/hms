<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineAppointment extends Model
{
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'sex',
        'birthdate',
        'contact_no',
        'email',
        'address',
        'date',
        'time',
        'reason',
        'medical_history',
        'preferred_doctor',
        'status',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
