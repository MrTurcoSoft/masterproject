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
        Schema::create('homesections', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->string('title');
            $table->text('titles')->nullable();
            $table->text('description')->nullable();
            $table->text('descriptions')->nullable();
            $table->string('btnText')->nullable();
            $table->text('btnTexts')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->enum('isActive', ['0', '1'])->default(1);
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP '));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homesections');
    }
};
