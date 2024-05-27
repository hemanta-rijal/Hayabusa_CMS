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
        Schema::table('about_page', function (Blueprint $table) {
            $table->text('itahari_image')->nullable()->after('itahari_description_jp');
            $table->text('nepalgunj_image')->nullable()->after('nepalgunj_description_jp');
            $table->text('documentation_image')->nullable()->after('documentation_description_jp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_page', function (Blueprint $table) {
            $table->dropColumn('itahari_image');
            $table->dropColumn('nepalgunj_image');
            $table->dropColumn('documentation_image');
        });
    }
};
