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
        Schema::create('orders', function (Blueprint $table){
           $table->increments('id')->unique();
           $table->integer('user_id')->unsigned()->nullable();
           $table->string('session_id')->nullable();
           $table->string('firstname');
           $table->string('lastname');
           $table->string('email');
           $table->string('phone');
           $table->string('city');
           $table->string('address');
           $table->string('comment');
           $table->string('payment');
           $table->rememberToken();
           $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('order_products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned()->nullable();
            $table->float('product_price')->unsigned()->nullable(); // without discounts
            $table->integer('quantity')->unsigned()->nullable();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
