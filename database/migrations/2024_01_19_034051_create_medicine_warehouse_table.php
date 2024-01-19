<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineWarehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_warehouse', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('medicine_id');
 
            $table->foreign('medicine_id')->references('id')->on('medicines');

            $table->unsignedBigInteger('warehouse_id');
 
            $table->foreign('warehouse_id')->references('id')->on('warehouses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicine_warehouse');
    }
}
