<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 120)->nullable(false)->index();
            $table->string('slug', 120)->nullable(false)->index();
            $table->string('image', 220)->nullable(true);
            $table->string('description', 500)->nullable(true);
            $table->text('text')->nullable(false);
            $table->datetime('publication_date')->index()->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
