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
	        //срань
			$table->string('binding_type');
			$table->string('detector_type');
			$table->integer('color_detector_count');
			$table->boolean('linear_tomography');
			$table->boolean('motorical_move');
			$table->boolean('telescopical_table');
			$table->integer('working_places_count');
			$table->integer('xray_power');
			$table->boolean('analog_xray');
			$table->boolean('digital_xray');
			$table->boolean('3d_table_move');
			$table->boolean('remote_table_control');
			$table->boolean('auto_position');
			$table->boolean('laterograph');
			$table->integer('max_weight');
			$table->boolean('sub_angi');
			$table->boolean('touchscreen');
			$table->boolean('remote_detector');
			$table->boolean('rotating_arrow');
			$table->boolean('acc');
			$table->string('ray_type');
			$table->integer('proaction');
			$table->boolean('active_cooling');
			$table->boolean('model_3d');
			$table->boolean('displays');
			$table->boolean('thomosyntez');
			$table->boolean('xray_camera_protection');
	        //еще срань
//	        $table->boolean('research_perfusi_main_brain');
//	        $table->boolean('planing_xray_power');
//	        $table->boolean('mans_health');
//	        $table->boolean('cancer');
//	        $table->boolean('pediator');
//	        $table->boolean('womens_health');
//	        $table->boolean('angiograph');
//	        $table->boolean('cardio');
//	        $table->boolean('body_research');
//	        $table->boolean('spina_research');
//	        $table->boolean('ortopedo');
//	        $table->boolean('nevrolgia');
//	        $table->boolean('surgical_interven');
//	        $table->boolean('surgical_interven');
	        //стало чуть легче но епта
	        $table->integer('friendly_interface');
	        $table->integer('delivery_time');
	        $table->boolean('rasrochka');
	        $table->integer('price_type');
	        $table->integer('complect');
	        $table->integer('make_quality');
	        $table->integer('brand_quality');
	        //опять что то не в порядке
	        $table->string('sub_category');
	        $table->string('sub_category_more');
	        $table->string('quality');
	        $table->boolean('is_have');
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
