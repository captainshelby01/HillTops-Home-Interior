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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category'); // e.g. Kitchens, Wardrobes, Doors, Living & TV, Commercial
            $table->string('location');
            $table->string('year');
            $table->string('cover_image');
            $table->text('tagline');
            $table->text('client_challenge');
            $table->text('design_vision');
            $table->text('transformation_outcome');
            $table->json('gallery_images')->nullable();
            $table->json('specifications')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
