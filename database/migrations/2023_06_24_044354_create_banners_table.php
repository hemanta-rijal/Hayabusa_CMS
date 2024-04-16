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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('title_en');
            $table->string('title_jp');
            $table->text('description_en');
            $table->text('description_jp');
            $table->enum('type', ['email', 'button', 'none']);
            $table->string('button_text_jp')->nullable();
            $table->string('button_text_en')->nullable();
            $table->string('button_link')->nullable();
            $table->string('email_title_en')->nullable();
            $table->string('email_title_jp')->nullable();
            $table->string('email_button_en')->nullable();
            $table->string('email_button_jp')->nullable();
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
        Schema::dropIfExists('banners');
    }
};
