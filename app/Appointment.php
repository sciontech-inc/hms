<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id',
        'appointment_type',
        'appointment_staff',
        'appointment_date',
        'appointment_time',
        'appointment_status',
        'appointment_notification_preference',
        'appointment_remarks',
        'appointment_location',
        'appointment_confirmation',
        'appointment_next_appointment',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
