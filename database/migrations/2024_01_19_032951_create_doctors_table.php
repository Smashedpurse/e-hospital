<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name',50);
            $table->string('second_name',50);
           
            $table->unsignedBigInteger('assigned_area_id');
 
            $table->foreign('assigned_area_id')->references('id')->on('assigned_areas');


            $table->unsignedBigInteger('speciality_id');
 
            $table->foreign('speciality_id')->references('id')->on('specialities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
