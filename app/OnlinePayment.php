<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlinePayment extends Model
{
    protected $fillable = [
        'invoice_number',
        'contact_no',
        'email',
        'outstanding_balance',
        'payment_date',
        'payment_type',
        'amount',
        'reference_no',
        'payment_gateway',
        'transaction_fee',
        'status',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
