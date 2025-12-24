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
        Schema::create('page_contents', function (Blueprint $table) {
            $table->id();
            $table->string('page_slug')->index();           // e.g., "home", "about"
            $table->string('section_slug')->index();        // e.g., "hero", "scrolling_ticker"
            $table->string('section_title');                // Human readable: "Hero Section"
            $table->json('content');                        // All section content as JSON
            $table->integer('order')->default(0);           // Display order
            $table->boolean('is_active')->default(true);    // Enable/disable section
            $table->timestamps();

            // Ensure unique page + section combination
            $table->unique(['page_slug', 'section_slug']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_contents');
    }
};
