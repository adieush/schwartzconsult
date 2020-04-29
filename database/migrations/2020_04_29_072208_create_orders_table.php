<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('merchant_id')->nullable();
            $table->string('response_status');
            $table->string('amount');
            $table->string('currency');
            $table->string('actual_amount')->nullable();
            $table->string('actual_currency')->nullable();
            $table->string('masked_card')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('card_type')->nullable();
            $table->string('sender_email')->nullable();
            $table->string('merchant_data')->nullable();
            $table->text('response_signature_string')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
