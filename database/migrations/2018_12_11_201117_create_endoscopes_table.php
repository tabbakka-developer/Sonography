<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndoscopesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endoscopes', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('brand');
	        $table->string('model');
	        $table->string('code');
	        $table->string('country');
	        $table->integer('warranty');
	        $table->string('device_level');
	        $table->integer('screen_size');
	        $table->boolean('animals');
	        $table->boolean('sale');
	        $table->boolean('white_auto_balance');
	        $table->boolean('freeze');
	        $table->boolean('connect_with_desktop');
	        $table->string('light_position');
	        $table->string('light_type');
	        $table->boolean('red_boosted');
	        $table->boolean('virtual_chromoscopy');
	        $table->boolean('choose_interested_sector');
	        $table->boolean('image_perfect');
	        $table->boolean('image_in_image');
	        $table->boolean('image_zoom');
	        $table->boolean('cyto_connect');
	        $table->boolean('entro_connect');
	        $table->boolean('douden_connect');
	        $table->boolean('sygmo_connect');
	        $table->boolean('lazo_connect');
	        $table->boolean('bronho_connect');
	        $table->boolean('baby_scope');
	        $table->boolean('double_view_record');
	        $table->boolean('photometric_mode');
	        $table->boolean('hd_mode');
	        $table->boolean('twin_mode');
	        $table->boolean('show_product');
	        //
	        $table->integer('delivery_time');
	        $table->boolean('rasrochka');
	        //
	        $table->string('photo');
	        $table->text('description');
	        $table->string('video_review');
	        $table->string('preview_book');
	        //
	        $table->double('price');
	        $table->string('currency');
	        $table->boolean('show_price');
	        $table->boolean('recommend');
	        $table->string('quality');
	        $table->boolean('is_have');
	        $table->boolean('free_delivery');
	        $table->boolean('free_engineer');

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
        Schema::dropIfExists('endoscopes');
    }
}
