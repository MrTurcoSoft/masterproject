<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultilingualSupportToPostsTableUpdated extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_sr')->nullable();
            $table->string('title_it')->nullable();
            $table->string('title_hu')->nullable();
            $table->string('title_es')->nullable();

            $table->text('content_de')->nullable();
            $table->text('content_fr')->nullable();
            $table->text('content_sr')->nullable();
            $table->text('content_it')->nullable();
            $table->text('content_hu')->nullable();
            $table->text('content_es')->nullable();

            $table->string('slug_de')->nullable();
            $table->string('slug_fr')->nullable();
            $table->string('slug_sr')->nullable();
            $table->string('slug_it')->nullable();
            $table->string('slug_hu')->nullable();
            $table->string('slug_es')->nullable();
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn([
                'title_de', 'title_fr', 'title_sr', 'title_it', 'title_hu', 'title_es',
                'content_de', 'content_fr', 'content_sr', 'content_it', 'content_hu', 'content_es',
                'slug_de', 'slug_fr', 'slug_sr', 'slug_it', 'slug_hu', 'slug_es'
            ]);
        });
    }
}
