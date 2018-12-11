<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::dropIfExists('products');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::create('products', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('model');
		    $table->string('brand');
		    $table->string('code');
		    $table->boolean('show_product');
		    $table->string('country');
		    $table->boolean('animals');
		    $table->double('price');
		    $table->string('currency');
		    $table->boolean('show_price');
		    $table->boolean('recommend');
		    $table->string('preview_book');
		    $table->text('description');
		    $table->timestamps();
	    });
    }
}
