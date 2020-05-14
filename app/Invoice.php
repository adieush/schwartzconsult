<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'client_name',
        'phone_number',
        'amount',
        'currency',
        'hash',
        'order_status',
        'payment_id',
        'card_type'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            /** Invoice $model */
            $model->amount = $model->beforeAmountSave();
        });
    }


    public static function getByHash($hash)
    {
        return Invoice::where('hash', $hash)
            ->first();

    }

    public function getAmount(){
        return $this->amount/100;
    }

    public function beforeAmountSave()
    {
        return $this->amount * 100;
    }
}
