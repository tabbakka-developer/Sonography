<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uzi_apparats', function (Blueprint $table) {
	        $table->string('brand');
	        $table->string('model');
	        $table->string('code');
	        $table->string('sub_category');
	        $table->string('sub_category_more');

	        $table->string('quality');
	        $table->boolean('show_product');
	        $table->boolean('animals');
//	        $table->boolean('action');
	        $table->string('country');
	        $table->string('level');
	        $table->double('screen_size');
	        $table->integer('memory');
	        $table->integer('warranty');

	        $table->text('description');
	        $table->boolean('free_delivery');
	        $table->boolean('free_engineer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uzi_apparats', function (Blueprint $table) {
            //
        });
    }
}
