<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadiologyResult extends Model
{
    protected $fillable = [
        'procedure_id',
        'radiologist',
        'report_date',
        'report_findings',
        'conclusion',
        'recommendation',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
