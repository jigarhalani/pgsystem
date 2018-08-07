<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		    Schema::create('rooms', function (Blueprint $table) {

			    $table->increments('id');
			    $table->integer('building_id');
			    $table->string('room_name')->nullable();
			    $table->string('max_person')->nullable();
			    $table->tinyInteger('is_active')->default(1)->comment("0 for inactive, 1 for active");
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
	        Schema::dropIfExists( 'rooms' );
    }
}
