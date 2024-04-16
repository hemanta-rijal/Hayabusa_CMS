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
        Schema::create('service_for_client', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('sub_title_en')->nullable();
            $table->string('sub_title_jp')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_jp')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_jp')->nullable();
            $table->string('page_image')->nullable();
            $table->json('services')->nullable();
            $table->string('services_title_en')->nullable();
            $table->string('services_title_jp')->nullable();
            $table->string('button_text_en')->nullable();
            $table->string('button_text_jp')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('service_for_client');
    }
};
