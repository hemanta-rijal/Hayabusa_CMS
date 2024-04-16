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
    public function up(): void
    {
        Schema::create('study_in_japan', function (Blueprint $table) {
            $table->id();
            $table->string('main_title_en')->nullable();
            $table->string('main_title_jp')->nullable();
            $table->string('secondary_sub_title_en')->nullable();
            $table->string('secondary_sub_title_jp')->nullable();
            $table->string('secondary_title_en')->nullable();
            $table->string('secondary_title_jp')->nullable();
            $table->text('page_description_en')->nullable();
            $table->text('page_description_jp')->nullable();
            $table->text('secondary_page_description_en')->nullable();
            $table->text('secondary_page_description_jp')->nullable();
            $table->string('button_text_en')->nullable();
            $table->string('button_text_jp')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('page_image')->nullable();
            $table->json('questions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('study_in_japan');
    }
};
