<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['client_name', 'phone_number', 'amount', 'currency', 'hash'];


    public static function getByHash($hash)
    {
        return Invoice::where('hash', $hash)
            ->first();

    }
}
