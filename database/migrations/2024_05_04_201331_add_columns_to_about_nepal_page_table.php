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
        Schema::table('about_nepal_page', function (Blueprint $table) {
            $table->string('section_1_title_en')->nullable();
            $table->string('section_1_title_jp')->nullable();
            $table->text('section_1_description_en')->nullable();
            $table->text('section_1_description_jp')->nullable();
            $table->string('section_2_title_en')->nullable();
            $table->string('section_2_title_jp')->nullable();
            $table->text('section_2_description_en')->nullable();
            $table->text('section_2_description_jp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_nepal_page', function (Blueprint $table) {
            $table->dropColumn('section_1_title_en');
            $table->dropColumn('section_1_title_jp');
            $table->dropColumn('section_1_description_en');
            $table->dropColumn('section_1_description_jp');
            $table->dropColumn('section_2_title_en');
            $table->dropColumn('section_2_title_jp');
            $table->dropColumn('section_2_description_en');
            $table->dropColumn('section_2_description_jp');
        });
    }
};
