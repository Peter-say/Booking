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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->decimal('amount', 10, 2);
            $table->date('payment_date');
            $table->string('payment_method');
            $table->string('transaction_id')->nullable();
            $table->string('payment_status');
            $table->string('currency');
            $table->string('confirmation_number')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->text('payment_description')->nullable();
            $table->date('refund_date')->nullable();
            $table->decimal('refund_amount', 10, 2)->nullable();
            $table->json('discounts')->nullable();
            $table->json('tax_information')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
