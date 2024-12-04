
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultilingualSupportToSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sliders', function (Blueprint $table) {
            // Adding multilingual support columns for `title`, `content`, `content2`, and `btnText`
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

            $table->text('content2_de')->nullable();
            $table->text('content2_fr')->nullable();
            $table->text('content2_sr')->nullable();
            $table->text('content2_it')->nullable();
            $table->text('content2_hu')->nullable();
            $table->text('content2_es')->nullable();

            $table->string('btnText_de')->nullable();
            $table->string('btnText_fr')->nullable();
            $table->string('btnText_sr')->nullable();
            $table->string('btnText_it')->nullable();
            $table->string('btnText_hu')->nullable();
            $table->string('btnText_es')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sliders', function (Blueprint $table) {
            // Dropping multilingual support columns
            $table->dropColumn([
                'title_de', 'title_fr', 'title_sr', 'title_it', 'title_hu', 'title_es',
                'content_de', 'content_fr', 'content_sr', 'content_it', 'content_hu', 'content_es',
                'content2_de', 'content2_fr', 'content2_sr', 'content2_it', 'content2_hu', 'content2_es',
                'btnText_de', 'btnText_fr', 'btnText_sr', 'btnText_it', 'btnText_hu', 'btnText_es'
            ]);
        });
    }
}
?>
