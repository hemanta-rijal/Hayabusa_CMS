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
        Schema::table('ctas', function (Blueprint $table) {
            // Rename existing columns
            $table->renameColumn('main_title', 'main_title_en');
            $table->renameColumn('sup_title', 'sup_title_en');
            
            // Add new columns
            $table->string('main_title_jp')->nullable();
            $table->string('sup_title_jp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ctas', function (Blueprint $table) {
            // Reverse the changes made in the up() method
            $table->renameColumn('main_title_en', 'main_title');
            $table->renameColumn('sup_title_en', 'sup_title');
            
            // Drop the newly added columns
            $table->dropColumn(['main_title_jp', 'sup_title_jp']);
        });
    }
};
