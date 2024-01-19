<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosages', function (Blueprint $table) {
            $table->id();
            $table->string('Description');
            $table->double('dose');
            $table->timestamps();

            $table->unsignedBigInteger('dosage_type_id');
 
            $table->foreign('dosage_type_id')->references('id')->on('dosage_types_id');

            $table->unsignedBigInteger('medicine_time_id');
 
            $table->foreign('medicine_time_id')->references('id')->on('medicine_times_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosages');
    }
}
