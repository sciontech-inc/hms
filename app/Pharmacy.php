<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $fillable = [
        'medication_id',
        'medication_name',
        'description',
        'category',
        'stock',
        'unit_price',
        'manufacturer',
        'expiry_date',
        'reorder_level',
        'location',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
