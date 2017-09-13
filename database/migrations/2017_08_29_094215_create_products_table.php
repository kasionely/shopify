<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('title');
            $table->text('little_description');
            $table->text('description');
            $table->string('price');
            $table->string('imagePath');
            $table->string('slug');
            $table->string('video')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('product_properties', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable();
            $table->integer('property_id')->unsigned();
            $table->string('value')->nullable();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });

        Schema::create('product_gallery', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable();
            $table->text('image');

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

        Schema::create('product_callbacks', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable();
            $table->boolean('status')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
        });

    }

    public function down()
    {
        Schema::drop('products');
        Schema::drop('product_callbacks');
        Schema::drop('product_gallery');
        Schema::drop('product_categories');
        Schema::drop('product_properties');
    }
}
