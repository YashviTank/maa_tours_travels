<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->string('slug', 200)->unique();
            $table->string('destination', 100);
            $table->string('duration', 50);
            $table->decimal('price', 10, 2);
            $table->text('image_url')->nullable();
            $table->text('description')->nullable();
            $table->text('overview')->nullable();
            $table->text('highlights')->nullable();
            $table->text('inclusions')->nullable();
            $table->text('exclusions')->nullable();
            $table->text('itinerary')->nullable();
            $table->string('category', 50)->nullable();
            $table->decimal('rating', 2, 1)->default(4.5);
            $table->integer('reviews')->default(0);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
