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
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('title')->nullable()->after('id');
            $table->string('book_link')->nullable()->after('title');
            $table->string('author')->nullable()->after('book_link');
            $table->string('description')->nullable()->after('author');
            $table->string('image_url')->nullable()->after('description');
            $table->date('published_date')->nullable()->after('image_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('book_link');
            $table->dropColumn('author');
            $table->dropColumn('description');
            $table->dropColumn('image_url');
            $table->dropColumn('published_date');
        });
    }
};
