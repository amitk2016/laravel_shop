<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('products', function (Blueprint $table){

             $table->increments('id');
             $table->string('product_title',100);
             $table->text('product_description');
             $table->string('image',100);
             $table->decimal('price',5,2);
             $table->float('quantity');
             $table->timestamps();


         }
           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::drop('products');   

    }
}
