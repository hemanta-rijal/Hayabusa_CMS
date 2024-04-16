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
        Schema::create('event_page', function (Blueprint $table) {
            $table->id();
            $table->string('main_title_en')->nullable();
            $table->string('main_title_jp')->nullable();
            $table->string('sup_title_en')->nullable();
            $table->string('sup_title_jp')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_jp')->nullable();
            $table->text('sub_title_en')->nullable();
            $table->text('form_sub_title_jp')->nullable();
            $table->string('form_title_en')->nullable();
            $table->string('form_title_jp')->nullable();
            $table->text('form_sub_title_en')->nullable();
            $table->text('sub_title_jp')->nullable();
            $table->string('button_text_en')->nullable();
            $table->string('button_text_jp')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->string('detail_image')->nullable();
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
        Schema::dropIfExists('event_page');
    }
};
