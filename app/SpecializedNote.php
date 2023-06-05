<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecializedNote extends Model
{
    protected $fillable = [
        'patient_name',
        'date',
        'note_title',
        'note_type',
        'note_group',
        'note_description',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}

