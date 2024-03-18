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
        Schema::create('transport', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('status', ['Usado', 'Novo']);
            $table->enum('type', ['Carro', 'Moto'])->default('Carro');
            $table->enum('sale_or_rent', ['Venda', 'Aluguer']);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->foreignId('model_id')->constrained('models')->onDelete('cascade');
            $table->foreignId('year_id')->constrained('years')->onDelete('cascade');
            $table->foreignId('fuel_id')->constrained('fuels')->onDelete('cascade');
            $table->string('motorization_cc')->nullable();
            $table->string('power_hp')->nullable();
            $table->enum('gear_box', ['Automática', 'Manual'])->nullable();
            $table->foreignId('color_id')->constrained('colors')->onDelete('cascade');
            $table->enum('air_conditioning', ['Automático', 'Automático multizona', 'Manual'])->nullable();
            $table->json('equipment')->nullable();
            $table->json('security')->nullable();
            $table->json('parking_sensors')->nullable();
            $table->json('airbags')->nullable();
            $table->json('extras')->nullable();
            $table->json('photos');
            $table->string('description');
            $table->timestamps();
        });


        Schema::create('transport_rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transport_id')->constrained('transport')->onDelete('cascade');
            $table->string('rental_time')->default('0');
            $table->date('rental_start_date');
            $table->date('rental_end_date')->nullable();
            $table->float('price');
            $table->enum('status', ['Pago', 'Processando', 'Dísponivel'])->default('Dísponivel');
            $table->timestamps();
        });

        Schema::create('transport_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transport_id')->constrained('transport')->onDelete('cascade');
            $table->float('price');
            $table->enum('status', ['Pago', 'Processando', 'Dísponivel'])->default('Dísponivel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport');
        Schema::dropIfExists('transport_rentals');
        Schema::dropIfExists('transport_sales');
    }
};
