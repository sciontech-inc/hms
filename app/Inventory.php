<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'item_name',
        'description',
        'category',
        'stock',
        'unit_price',
        'manufacturer',
        'expiry_date',
        'reorder_level',
        'location',
        'status',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
