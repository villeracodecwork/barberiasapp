<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services_barbers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services', 'id');
            $table->foreignId('barber_id')->constrained('barbers', 'id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services_barbers');
    }
};
