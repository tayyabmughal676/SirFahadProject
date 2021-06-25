<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblIotSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_iot_sensors', function (Blueprint $table) {
            $table->id();
            $table->float("ph_sensor");
            $table->float("hum_sensor");
            $table->float("temp_sensor");
            $table->float("light_sensor");
            $table->float("moist_sensor");
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
        Schema::dropIfExists('tbl_iot_sensors');
    }
}
