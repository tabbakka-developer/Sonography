<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUziTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uzi_apparats', function (Blueprint $table) {

	        $table->integer('price');
	        $table->string('currency');
	        $table->boolean('is_have');
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
