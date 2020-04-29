<?php

namespace App\Http\Controllers;

use Cloudipsp\Configuration;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return void
     */
    public function oneToOne()
    {
        Configuration::setMerchantId(config('fondy.merchant_id'));
        Configuration::setSecretKey(config('fondy.secret_key'));
        Configuration::setRequestType('form');
        $checkoutData = [
            'order_desc' => 'One to One',
            'currency' => 'GBP',
            'amount' => 1000,
            'response_url' => url("/checkout/response-to-server"),
//            'server_callback_url' => 'http://site.com/callbackurl',
//            'sender_email' => 'test@fondy.eu',
            'lang' => 'en',
            'product_id' => 1,
            'lifetime' => 36000,
            'merchant_data' => array(
                'custom_data1' => 'Some string',
                'custom_data2' => '00000000000',
                'custom_data3' => '3!@#$%^&(()_+?"}'
            )
        ];
        \Cloudipsp\Checkout::url($checkoutData)->toCheckout();

        return;
    }

    public function responseToServer()
    {

        echo url("/checkout/response-to-server");
        echo '<pre>';
        var_dump($_POST);
        exit;
    }
}
