
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultilingualSupportToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            // Adding multilingual support columns for `cat_name`, `title`, and `description`
            $table->string('cat_name_de')->nullable();
            $table->string('cat_name_fr')->nullable();
            $table->string('cat_name_sr')->nullable();
            $table->string('cat_name_it')->nullable();
            $table->string('cat_name_hu')->nullable();
            $table->string('cat_name_es')->nullable();

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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            // Dropping multilingual support columns
            $table->dropColumn([
                'cat_name_de', 'cat_name_fr', 'cat_name_sr', 'cat_name_it', 'cat_name_hu', 'cat_name_es',
                'title_de', 'title_fr', 'title_sr', 'title_it', 'title_hu', 'title_es',
                'description_de', 'description_fr', 'description_sr', 'description_it', 'description_hu', 'description_es'
            ]);
        });
    }
}
?>
