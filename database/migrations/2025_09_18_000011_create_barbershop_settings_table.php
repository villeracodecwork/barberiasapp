<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barbershop_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barbershop_id')->constrained('barbershops');
            $table->string('key');
            $table->text('value')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
            $table->unique(['barbershop_id', 'key']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barbershop_settings');
    }
};
