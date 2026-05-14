<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->nullable()->constrained('tours')->nullOnDelete();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->date('travel_date');
            $table->integer('adults')->default(1);
            $table->integer('children')->default(0);
            $table->text('message')->nullable();
            $table->decimal('total_amount', 10, 2)->nullable();
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
