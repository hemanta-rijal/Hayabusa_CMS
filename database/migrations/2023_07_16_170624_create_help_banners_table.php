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
        Schema::create('help_banners', function (Blueprint $table) {
            $table->id();
            $table->string("title_en");
            $table->string("title_jp");
            $table->string("button_text_en");
            $table->string("button_text_jp");
            $table->text("sub_title_en");
            $table->text("sub_title_jp");
            $table->text("link");
            $table->string("background_image");
            $table->string("image");
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
        Schema::dropIfExists('help_banners');
    }
};
