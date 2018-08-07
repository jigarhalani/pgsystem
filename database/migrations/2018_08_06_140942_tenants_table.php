<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
	    Schema::create('tenants', function (Blueprint $table) {

		    $table->increments('id');
		    $table->integer('building_id');
		    $table->integer('room_id');
		    $table->string('name');
		    $table->text('address')->nullable();
		    $table->string('pan_no');
		    $table->string('aadhar_no');
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
	    Schema::dropIfExists( 'tenants' );
    }
}
