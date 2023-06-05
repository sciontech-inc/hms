<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoConference extends Model
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'topic',
        'agenda',
        'duration',
        'participant_email',
        'date',
        'time',
        'meeting_link',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
