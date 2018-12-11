<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentgensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentgens', function (Blueprint $table) {
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
	        //

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
        Schema::dropIfExists('rentgens');
    }
}
