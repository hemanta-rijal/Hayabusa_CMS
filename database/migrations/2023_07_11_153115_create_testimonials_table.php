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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string("name_en");
            $table->string("name_jp");
            $table->string("tagline_en");
            $table->string("tagline_jp");
            $table->text("testimonial_en");
            $table->text("testimonial_jp");
            $table->string("image")->nullable();
            $table->string("youtube")->nullable();
            $table->enum("type",["client", "student"]);
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
        Schema::dropIfExists('testimonials');
    }
};
