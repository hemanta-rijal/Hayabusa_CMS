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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_jp');
            $table->string('name_en')->nullable();
            $table->string('name_jp')->nullable();
            $table->string('slug');
            $table->string('type');
            $table->string('target')->nullable();
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')
                ->on('menus')->onDelete('cascade');

            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')
                ->on('menu_items')->onDelete('cascade');
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
        Schema::dropIfExists('menu_items');
    }
};
