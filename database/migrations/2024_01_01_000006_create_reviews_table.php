<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('reviews')) {
            Schema::create('reviews', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->nullable();
                $table->string('location')->nullable();
                $table->unsignedBigInteger('tour_id')->nullable();
                $table->integer('rating'); // 1-5
                $table->text('review');
                $table->string('image_url')->nullable();
                $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
                $table->timestamps();
                
                $table->foreign('tour_id')->references('id')->on('tours')->onDelete('set null');
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
