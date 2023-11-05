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
        Schema::create('rooms', function (Blueprint $table) {
                $table->id();
                $table->string('room_number');
                $table->string('room_type');
                $table->decimal('price', 10, 2);
                $table->json('amenities'); // Store amenities as a JSON array
                $table->json('rules'); // Store room rules as a JSON array
                $table->text('description')->nullable(); // Room description
                $table->integer('capacity'); // Maximum guest capacity
                $table->boolean('smoking_allowed')->default(false); // Smoking allowed in the room
                $table->integer('beds'); // Number of beds in the room
                $table->string('bed_type'); // Type of beds (e.g., king, queen, twin)
                $table->boolean('pet_friendly')->default(false); // Pet-friendly room
                $table->json('images')->nullable(); // JSON array of room images
                $table->integer('floor'); // Room floor number
                $table->boolean('balcony')->default(false); // Room with a balcony
                $table->boolean('ocean_view')->default(false); // Room with an ocean view
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
