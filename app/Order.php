<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id',
        'merchant_id',
        'response_status',
        'amount',
        'currency',
    ];
}
