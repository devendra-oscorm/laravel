<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('excerpt', 500)->nullable()->after('description');
            $table->string('category', 100)->nullable()->after('image');
            $table->string('tags', 255)->nullable()->after('category');
            $table->string('author', 255)->nullable()->after('tags');
            $table->string('meta_title', 255)->nullable()->after('author');
            $table->string('meta_description', 500)->nullable()->after('meta_title');
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['excerpt','category','tags','author','meta_title','meta_description']);
        });
    }
};
