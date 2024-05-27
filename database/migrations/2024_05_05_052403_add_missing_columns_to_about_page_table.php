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
        Schema::table('about_page', function (Blueprint $table) {
            $table->text('itahari_description_en')->nullable();
            $table->text('itahari_description_jp')->nullable();
            $table->text('nepalgunj_description_en')->nullable();
            $table->text('nepalgunj_description_jp')->nullable();
            $table->string('documentation_title_en')->nullable();
            $table->string('documentation_title_jp')->nullable();
            $table->text('documentation_description_en')->nullable();
            $table->text('documentation_description_jp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_page', function (Blueprint $table) {
            $table->dropColumn('itahari_description_en');
            $table->dropColumn('itahari_description_jp');
            $table->dropColumn('nepalgunj_description_en');
            $table->dropColumn('nepalgunj_description_jp');
            $table->dropColumn('documentation_title_en');
            $table->dropColumn('documentation_title_jp');
            $table->dropColumn('documentation_description_en');
            $table->dropColumn('documentation_description_jp');
        });
    }
};
