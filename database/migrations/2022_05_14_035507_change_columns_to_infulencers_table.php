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
        Schema::table('infulencers', function (Blueprint $table) {
            $table->string('twitter_link')->nullable()->change();
            $table->string('youtube_link')->nullable()->change();
            $table->string('instagram_link')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('infulencers', function (Blueprint $table) {
            $table->dropColumn('twitter_link');
            $table->dropColumn('youtube_link');
            $table->dropColumn('instagram_link');
        });
    }
};
