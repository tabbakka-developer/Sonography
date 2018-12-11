<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReanimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reanims', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('brand');
	        $table->string('model');
	        $table->string('code');
	        $table->boolean('show_product');
	        $table->boolean('animals');
	        $table->double('price');
	        $table->string('currency');
	        $table->boolean('show_price');
	        $table->boolean('recommend');
	        $table->string('quality');
	        $table->boolean('is_have');
	        $table->boolean('free_delivery');
	        $table->boolean('free_engineer');
	        $table->string('photo');
	        $table->text('description');
	        //
	        $table->integer('delivery_time');
	        $table->boolean('rasrochka');
	        //
	        $table->string('sub_category');
	        $table->integer('user_friendly');
	        $table->integer('economy');
	        $table->integer('complect');
	        $table->integer('make_quality');
	        $table->integer('brand_quality');

	        //
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
        Schema::dropIfExists('reanims');
    }
}
