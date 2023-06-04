<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineQueue extends Model
{
    protected $fillable = [
        'fullname',
        'sex',
        'birthdate',
        'contact_no',
        'email',
        'relationship',
        'placement',
        'status',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
