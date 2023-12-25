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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('settings_description');
            $table->string('settings_key');
            $table->text('settings_value')->nullable();
            $table->string('settings_type');
            $table->integer('settings_must');
            $table->boolean('settings_delete')->default(0);
            $table->boolean('settings_status')->default(1);
            $table->boolean('see_is_user')->default(1);
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
        Schema::dropIfExists('settings');
    }
};
