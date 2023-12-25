<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned()->unique();
            $table->string('volume');
            $table->string('boxsize');
            $table->string('qtyBox');
            $table->string('BoxNetW');
            $table->string('BoxGrossW');
            $table->string('BoxOnPallet');
            $table->string('hsCode');
            $table->string('barcode');

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
};
