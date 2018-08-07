<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('building', function (Blueprint $table) {

		    $table->increments('id');
		    $table->integer('user_id');
		    $table->string('name');
		    $table->string('area')->nullable();
		    $table->string('city')->nullable();
		    $table->string('state')->nullable();
		    $table->string('pincode')->nullable();
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
        //
	    Schema::dropIfExists('building');
    }
}
