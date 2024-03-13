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
        Schema::create('cars', function (Blueprint $table) {
            // $table->id();
            // $table->string('title');
            // $table->enun('status', ['Usado', 'Novo']);
            // $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            // $table->foreignId('model_id')->constrained('models')->onDelete('cascade');
            // $table->string('km')->default(0);
            // $table->string('description');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
