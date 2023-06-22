<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $fillable = [
        'doctor_id',
        'status',
        'firstname',
        'middlename',
        'lastname',
        'suffix',
        'sex',
        'date_of_birth',
        'nationality',
        'contact_no',
        'email',
        'address_line_1',
        'address_line_2',
        'city',
        'province',
        'zip_code',
        'country',
        'address_line_1_2'.
        'address_line_2_2'.
        'city_2'.
        'province_2'.
        'zip_code_2'.
        'country_2'.
        'profile_img',
        'language_spoken',
        'emergency_fullname',
        'emergency_contact_no',
        'emergency_relationship',
        'medical_license_no',
        'medical_license_expiry_date',
        'medical_school',
        'graduation_year',
        'residency_training',
        'fellowship_training',
        'remarks',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
