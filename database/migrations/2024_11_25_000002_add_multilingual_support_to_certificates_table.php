
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultilingualSupportToCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('certificates', function (Blueprint $table) {
            // Adding multilingual support columns for `name`
            $table->string('name_de')->nullable();
            $table->string('name_fr')->nullable();
            $table->string('name_sr')->nullable();
            $table->string('name_it')->nullable();
            $table->string('name_hu')->nullable();
            $table->string('name_es')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('certificates', function (Blueprint $table) {
            // Dropping multilingual support columns
            $table->dropColumn([
                'name_de', 'name_fr', 'name_sr', 'name_it', 'name_hu', 'name_es'
            ]);
        });
    }
}
?>
