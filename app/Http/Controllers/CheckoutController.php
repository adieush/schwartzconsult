<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Order;
use Cloudipsp\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            'currency' => 'USD',
            'amount' => 29900,
            'response_url' => url("/checkout/response-to-server"),
            'server_callback_url' => url("/checkout/callback-to-server"),
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

    /**
     * Show the application dashboard.
     *
     * @return void
     */
    public function agencyPackage()
    {
        Configuration::setMerchantId(config('fondy.merchant_id'));
        Configuration::setSecretKey(config('fondy.secret_key'));
        Configuration::setRequestType('form');
        $checkoutData = [
            'order_desc' => 'Agency Package',
            'currency' => 'USD',
            'amount' => 129900,
            'response_url' => url("/checkout/response-to-server"),
            'server_callback_url' => url("/checkout/callback-to-server"),
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

    public function byHash($hash)
    {
        $invoice = Invoice::getByHash($hash);

        if(!empty($invoice)){
            Configuration::setMerchantId(config('fondy.merchant_id'));
            Configuration::setSecretKey(config('fondy.secret_key'));
            Configuration::setRequestType('form');
            $checkoutData = [
                'order_desc' => $invoice->client_name,
                'currency' => $invoice->currency,
                'amount' => $invoice->amount,
                'response_url' => url("/checkout/response-to-server"),
                'server_callback_url' => url("/checkout/callback-to-server"),
//            'sender_email' => 'test@fondy.eu',
                'lang' => 'en',
                'product_id' => $invoice->hash,
                'lifetime' => 36000
            ];
            \Cloudipsp\Checkout::url($checkoutData)->toCheckout();
        }
        return;
        
    }


    public function test()
    {
        Log::channel('fondy_says')->info('hello from fondy!', ['fff'=>234]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function responseToServer(Request $request)
    {
        Log::channel('fondy_says')->info(
            'Fondy reports about the payment!' . PHP_EOL,
            $request->post()
        );
        $request->validate([
            'order_id' => 'required',
            'response_status' => 'required',
            'amount' => 'required',
            'currency' => 'required',
        ]);

        Order::create($request->all());
        

        if($request->post('response_status') == 'success'){

            return redirect('/checkout/success');
        }
        else {

            return redirect('/checkout/fail');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function callbackToServer(Request $request)
    {
        Log::channel('fondy_says')->info(
            'Fondy CALLBACK!' . PHP_EOL,
            $request->post()
        );
        
    }

    public function success(){
        return view('pages.success');
    }

    public function fail(){
        return view('pages.fail');
    }
}
