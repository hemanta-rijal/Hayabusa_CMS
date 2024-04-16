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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title_en');
            $table->string('title_jp');
            $table->string('host_en');
            $table->string('host_jp');
            $table->string('date_en');
            $table->string('date_jp');
            $table->string('time_en');
            $table->string('time_jp');
            $table->string('venue_en');
            $table->string('venue_jp');
            $table->string('location_en');
            $table->string('location_jp');
            $table->string('entry_fee_en');
            $table->string('entry_fee_jp');
            $table->text('description_en');
            $table->text('description_jp');
            $table->string('thumbnail');
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
        Schema::dropIfExists('events');
    }
};
