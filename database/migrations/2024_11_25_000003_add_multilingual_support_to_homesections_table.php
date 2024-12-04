
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultilingualSupportToHomesectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homesections', function (Blueprint $table) {
            // Adding multilingual support columns for `title`, `description`, and `btnText`
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_sr')->nullable();
            $table->string('title_it')->nullable();
            $table->string('title_hu')->nullable();
            $table->string('title_es')->nullable();

            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_sr')->nullable();
            $table->text('description_it')->nullable();
            $table->text('description_hu')->nullable();
            $table->text('description_es')->nullable();

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
        Schema::table('homesections', function (Blueprint $table) {
            // Dropping multilingual support columns
            $table->dropColumn([
                'title_de', 'title_fr', 'title_sr', 'title_it', 'title_hu', 'title_es',
                'description_de', 'description_fr', 'description_sr', 'description_it', 'description_hu', 'description_es',
                'btnText_de', 'btnText_fr', 'btnText_sr', 'btnText_it', 'btnText_hu', 'btnText_es'
            ]);
        });
    }
}
?>
