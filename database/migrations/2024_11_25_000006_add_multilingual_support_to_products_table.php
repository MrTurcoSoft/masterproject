
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultilingualSupportToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Adding multilingual support columns for `name`, `title`, `slug`, and `description`
            $table->string('name_de')->nullable();
            $table->string('name_fr')->nullable();
            $table->string('name_sr')->nullable();
            $table->string('name_it')->nullable();
            $table->string('name_hu')->nullable();
            $table->string('name_es')->nullable();

            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_sr')->nullable();
            $table->string('title_it')->nullable();
            $table->string('title_hu')->nullable();
            $table->string('title_es')->nullable();

            $table->string('slug_de')->nullable();
            $table->string('slug_fr')->nullable();
            $table->string('slug_sr')->nullable();
            $table->string('slug_it')->nullable();
            $table->string('slug_hu')->nullable();
            $table->string('slug_es')->nullable();

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
        Schema::table('products', function (Blueprint $table) {
            // Dropping multilingual support columns
            $table->dropColumn([
                'name_de', 'name_fr', 'name_sr', 'name_it', 'name_hu', 'name_es',
                'title_de', 'title_fr', 'title_sr', 'title_it', 'title_hu', 'title_es',
                'slug_de', 'slug_fr', 'slug_sr', 'slug_it', 'slug_hu', 'slug_es',
                'description_de', 'description_fr', 'description_sr', 'description_it', 'description_hu', 'description_es'
            ]);
        });
    }
}
?>
