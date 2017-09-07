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
           $table->integer('user_id');
           $table->text('basket');
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
