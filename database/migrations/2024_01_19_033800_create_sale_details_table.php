<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_details', function (Blueprint $table) {
            $table->id();
            
            $table->timestamps();

            $table->unsignedBigInteger('sale_id');
 
            $table->foreign('sale_id')->references('id')->on('sales');

            $table->unsignedBigInteger('medicine_id');
 
            $table->foreign('medicine_id')->references('id')->on('medicines');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_details');
    }
}
