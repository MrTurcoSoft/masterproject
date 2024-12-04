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
        Schema::table('products', function (Blueprint $table) {
            $table->string('page_title')->nullable();
            $table->string('page_title_de')->nullable();
            $table->string('page_title_fr')->nullable();
            $table->string('page_title_sr')->nullable();
            $table->string('page_title_it')->nullable();
            $table->string('page_title_hu')->nullable();
            $table->string('page_title_es')->nullable();

            $table->text('page_description')->nullable();
            $table->text('page_description_de')->nullable();
            $table->text('page_description_fr')->nullable();
            $table->text('page_description_sr')->nullable();
            $table->text('page_description_it')->nullable();
            $table->text('page_description_hu')->nullable();
            $table->text('page_description_es')->nullable();

            $table->text('page_keywords')->nullable();
            $table->text('page_keywords_de')->nullable();
            $table->text('page_keywords_fr')->nullable();
            $table->text('page_keywords_sr')->nullable();
            $table->text('page_keywords_it')->nullable();
            $table->text('page_keywords_hu')->nullable();
            $table->text('page_keywords_es')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['page_title','page_title_de','page_title_fr','page_title_sr','page_title_it','page_title_hu','page_title_es',
                'page_description','page_description_de','page_description_fr','page_description_sr','page_description_it','page_description_hu','page_description_es',
                'page_keywords','page_keywords_de','page_keywords_fr','page_keywords_sr','page_keywords_it','page_keywords_hu','page_keywords_es']);
        });
    }
};
