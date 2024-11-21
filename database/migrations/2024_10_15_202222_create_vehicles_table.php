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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('fuel');
            $table->string('year');
            $table->string('color');
            $table->string('interior_color'); // Added interior color field
            $table->integer('seating_capacity'); // Added seating capacity field
            $table->string('transmission'); // Added transmission field
            $table->integer('mileage');
            $table->integer('price');
            $table->string('price_type');
            $table->string('condition');
            $table->string('description');
            $table->string('location');
            $table->string('steering_side');
            $table->string('cylinders');
            $table->string('regional_specs');
            $table->string('seats');
            $table->boolean('popular');
            $table->boolean('featured');
            $table->string('image');
            $table->boolean('status')->default(false);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('model_id')->constrained('vehicle_models')->onDelete('cascade'); // Reference to vehicle_models
            $table->foreignId('type_id')->constrained()->onDelete('cascade'); // Foreign key for type
            $table->foreignId('company_id')->constrained()->onDelete('cascade'); // Foreign key for company
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Foreign key for category
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
