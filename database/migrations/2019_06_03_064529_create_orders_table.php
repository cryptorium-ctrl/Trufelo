<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('orders', function (Blueprint $table) {
//            $table->increments('id');
//            $table->integer('user_id')->unsigned()->nullable();
//            $table->foreign('user_id')->refrences('id')->on('users')
//                  ->onUpdate('cascarde')->onDelete('set null');
//            $table->string('billing_email');
//            $table->string('billing_name');
//            $table->string('billing_address');
//            $table->string('billing_city');
//            $table->string('billing_protivnce');
//            $table->string('billing_postalcode');
//            $table->string('billing_phone');
//            $table->string('billing_name_on_card');
//            $table->integer('billing_discount')->default(0);
//            $table->integer('billing_discount_code')->nullable();
//            $table->integer('billing_total');
//            $table->string('payment_getaway')->default('stripe');
//            $table->boolean('shipped');
//            $table->string('error')->nullable();
//            $table->timestamps();
//        });
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
