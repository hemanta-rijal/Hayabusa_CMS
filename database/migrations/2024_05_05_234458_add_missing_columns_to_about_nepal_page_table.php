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
            $table->string('section_1_image')->after('section_1_description_jp');
            $table->string('section_2_image')->after('section_2_description_jp');
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
            $table->dropColumn('section_1_image');
            $table->dropColumn('section_2_image');
        });
    }
};
