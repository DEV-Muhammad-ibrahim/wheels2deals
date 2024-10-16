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
            $table->string('vehicle_registration_no');
            $table->string('registration_plate_no');
            $table->string('doi');
            $table->string('doe');
            $table->string('category');
            $table->string('company');
            $table->string('fuel');
            $table->string('year');
            $table->string('color');
            $table->integer('mileage');
            $table->integer('price');
            $table->string('price_type');
            $table->string('type');
            $table->string('condition');
            $table->string('description');
            $table->string('image');
            $table->boolean('status')->default(false);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
