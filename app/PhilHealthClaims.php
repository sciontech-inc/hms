<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhilHealthClaims extends Model
{
    protected $fillable = [
        'patient_id',
        'total_amount_actual',
        'total_amount_claimed',
        'admission_date',
        'discharge_date',
        'member_id',
        'member_lastname',
        'member_firstname',
        'member_middlename',
        'member_birthdate',
        'member_phone_no',
        'member_mobile_no',
        'member_sex',
        'member_email',
        'member_street',
        'member_barangay',
        'member_city',
        'member_province',
        'member_zip_code',
        'membership_type',
        'employer_id',
        'employer_name',
        'status',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
