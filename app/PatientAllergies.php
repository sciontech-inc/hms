<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientAllergies extends Model
{
    protected $fillable = [
        'patient_id',
        'allergen',
        'reaction',
        'severity',
        'date_of_onset',
        'treatment',
        'duration',
        'source_of_information',
        'know_cross_reactives',
        'current_management_plan',
        'medications_to_avoid',
        'severity_of_reaction',
        'anaphylaxis',
        'allergy_testing',
        'other_relevant_medical_history',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
