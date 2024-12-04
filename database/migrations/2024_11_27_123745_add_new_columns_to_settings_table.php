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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('settings_key_de')->nullable();
            $table->string('settings_key_fr')->nullable();
            $table->string('settings_key_sr')->nullable();
            $table->string('settings_key_it')->nullable();
            $table->string('settings_key_hu')->nullable();
            $table->string('settings_key_es')->nullable();

            $table->text('settings_value_de')->nullable();
            $table->text('settings_value_fr')->nullable();
            $table->text('settings_value_sr')->nullable();
            $table->text('settings_value_it')->nullable();
            $table->text('settings_value_hu')->nullable();
            $table->text('settings_value_es')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['settings_key_de','settings_key_fr','settings_key_sr','settings_key_it','settings_key_hu','settings_key_es','settings_value_de',
                'settings_value_fr','settings_value_sr','settings_value_it','settings_value_hu','settings_value_es']);
        });
    }
};
