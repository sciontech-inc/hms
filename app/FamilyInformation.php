<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyInformation extends Model
{
    protected $fillable = [
        'patient_id',
        'family_fullname',
        'family_birthdate',
        'family_relationship',
        'family_sex',
        'family_citizenship',
        'family_address',
        'family_contact_no',
        'family_email',
        'family_remarks',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
