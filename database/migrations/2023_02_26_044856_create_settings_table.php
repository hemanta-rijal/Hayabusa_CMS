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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name_en');
            $table->string('organization_name_jp')->nullable();
            $table->string('email')->nullable();
            $table->string('email_2')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('contact_no_2')->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_jp')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('twitter')->nullable();
            $table->text('skype')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('tiktok')->nullable();
            $table->text('youtube')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('line')->nullable();
            $table->text('map')->nullable();
            $table->text('logo')->nullable();
            $table->text('logo_secondary')->nullable();
            $table->text('prospectus')->nullable();
            $table->text('about_en')->nullable();
            $table->text('about_jp')->nullable();
            $table->string('copyright_text_en')->nullable();
            $table->string('copyright_text_jp')->nullable();
            $table->string('operating_days_en')->nullable();
            $table->string('operating_days_jp')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
