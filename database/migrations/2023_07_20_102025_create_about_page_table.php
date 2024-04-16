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
        Schema::create('about_page', function (Blueprint $table) {
            $table->id();
            $table->string('main_title_en')->nullable();
            $table->string('main_title_jp')->nullable();
            $table->string('page_sub_title_en')->nullable();
            $table->string('page_sub_title_jp')->nullable();
            $table->string('page_title_en')->nullable();
            $table->string('page_title_jp')->nullable();
            $table->text('page_description_en')->nullable();
            $table->text('page_description_jp')->nullable();
            $table->string('team_sub_title_en')->nullable();
            $table->string('team_sub_title_jp')->nullable();
            $table->string('team_title_en')->nullable();
            $table->string('team_title_jp')->nullable();
            $table->text('team_description_en')->nullable();
            $table->text('team_description_jp')->nullable();
            $table->string('director_title_en')->nullable();
            $table->string('director_title_jp')->nullable();
            $table->string('director_tagline_en')->nullable();
            $table->string('director_tagline_jp')->nullable();
            $table->string('director_name_en')->nullable();
            $table->string('director_name_jp')->nullable();
            $table->text('director_description_en')->nullable();
            $table->text('director_description_jp')->nullable();
            $table->string('image')->nullable();
            $table->string('page_image')->nullable();
            $table->string('director_image')->nullable();
            $table->json('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_page');
    }
};
