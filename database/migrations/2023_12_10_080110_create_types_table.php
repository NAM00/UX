<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->integer("type_id");
            $table->string("task1_range");
            $table->string("task1_sensor");
            $table->string("task1_median");
            $table->string("task2_range");
            $table->string("task2_sensor");
            $table->string("task2_median");
            $table->string("task3_range");
            $table->string("task3_sensor");
            $table->string("task3_median");
            $table->string("task4_range");
            $table->string("task4_sensor");
            $table->string("task4_median");
            $table->timestamps();
        });

        DB::table('types')->insert([
            ['type_id' => 1 , 'task1_range' => '1-74.43', 'task1_sensor' => 'outdoor humidity', 'task1_median' => '42,27', 'task2_range' => '0.59-0.59', 'task2_sensor' => 'Precipitation ml / m2', 'task2_median' => '0,59', 'task3_range' => '954.32-955.51', 'task3_sensor' => 'blast', 'task3_median' => '954,62', 'task4_range' => '3.23-23.09', 'task4_sensor' => 'temperature', 'task4_median' => '6,24'],
            ['type_id' => 2 , 'task1_range' => '30.52-47.19', 'task1_sensor' => 'Rain detector temp', 'task1_median' => '45,71', 'task2_range' => '1010-1011', 'task2_sensor' => 'Pressure', 'task2_median' => '1010,67', 'task3_range' => '16.9-23.19', 'task3_sensor' => 'Temperature board lan controller', 'task3_median' => '21,8', 'task4_range' => '26.73-65.7', 'task4_sensor' => '%', 'task4_median' => '64,27'],
            ['type_id' => 3 , 'task1_range' => '11.27-19.64', 'task1_sensor' => 'tC', 'task1_median' => '14,525', 'task2_range' => '93.1-99.9', 'task2_sensor' => 'humidity', 'task2_median' => '99,9', 'task3_range' => '74-75', 'task3_sensor' => 'Intensity of precipitation', 'task3_median' => '74,225', 'task4_range' => '1004.7-1006.87', 'task4_sensor' => 'Stationl', 'task4_median' => '1005,775'],
            ['type_id' => 4 , 'task1_range' => '54.1-55.73', 'task1_sensor' => 'rH%', 'task1_median' => '55,01', 'task2_range' => '25.3-34.4', 'task2_sensor' => 'Boiler', 'task2_median' => '25,85', 'task3_range' => '-299,7', 'task3_sensor' => 'Rain mm', 'task3_median' => '0,02', 'task4_range' => '1006.07-1009.12', 'task4_sensor' => '[HPa] BMP', 'task4_median' => '1008,67'],
            ['type_id' => 5 , 'task1_range' => '11.2-16.4', 'task1_sensor' => 'Swimming pool', 'task1_median' => '15,4', 'task2_range' => '897.67-956.33', 'task2_sensor' => 'Air', 'task2_median' => '946,665', 'task3_range' => '774.72-1338.24', 'task3_sensor' => 'Rain', 'task3_median' => '1282,49', 'task4_range' => '40.57-67.1', 'task4_sensor' => 'Moisture', 'task4_median' => '57,715'],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
}
