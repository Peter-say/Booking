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
        Schema::create('room_reserveds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservation_id')->constrained('reservations');
            $table->foreignId('room_id')->constrained('rooms');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->string('guest_name')->nullable();
            $table->string('guest_contact')->nullable();
            $table->text('guest_special_requests')->nullable();
            $table->string('reservation_status');
            $table->string('payment_status');
            $table->decimal('total_price', 10, 2);
            $table->decimal('deposit_amount', 10, 2)->nullable();
            $table->string('payment_method')->nullable();
            $table->date('payment_date')->nullable();
            $table->time('check_in_time')->nullable();
            $table->time('check_out_time')->nullable();
            $table->text('additional_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_reserveds');
    }
};
