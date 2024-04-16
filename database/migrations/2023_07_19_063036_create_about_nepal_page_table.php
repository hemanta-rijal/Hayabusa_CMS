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
        Schema::create('about_nepal_page', function (Blueprint $table) {
            $table->id();
            $table->string('main_title_en')->nullable();
            $table->string('main_title_jp')->nullable();
            $table->string('page_sub_title_en')->nullable();
            $table->string('page_sub_title_jp')->nullable();
            $table->string('page_title_en')->nullable();
            $table->string('page_title_jp')->nullable();
            $table->text('page_description_en')->nullable();
            $table->text('page_description_jp')->nullable();
            $table->string('image')->nullable();
            $table->string('page_image')->nullable();
            $table->json('details')->nullable();
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
        Schema::dropIfExists('about_nepal_page');
    }
};
