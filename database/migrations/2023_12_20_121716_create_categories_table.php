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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name');//Ana dildeki Category Name tutacak
            $table->json('cat_names')->nullable();//Diğer dillerdeki category adını tutacak
            $table->string('title');
            $table->json('titles')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->json('descriptions')->nullable();
            $table->string('cat_bg')->nullable();
            $table->string('image')->nullable();
            $table->string('thumb')->nullable();
            $table->string('thumb2')->nullable();
            $table->integer('must')->nullable();
            $table->enum('isActive', ['0', '1'])->default(1);
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
