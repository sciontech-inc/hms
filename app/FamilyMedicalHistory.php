<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMedicalHistory extends Model
{
    protected $fillable = [
        'patient_id',
        'relationship',
        'medical_condition',
        'age_at_diagnosis',
        'age_at_death',
        'cause_of_death',
        'other_relevant_medical_history',
        'family_history_of_specific_conditions',
        'ethnicity',
        'lifestyle_factors',
        'other_family_members_affected',
        'remarks',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
