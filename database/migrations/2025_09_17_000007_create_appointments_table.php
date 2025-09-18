<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barbershop_id')->constrained('barbershops', 'id');
            $table->foreignId('barber_id')->constrained('barbers', 'id');
            $table->foreignId('person_id')->constrained('people', 'id');
            $table->date('appointment_date');
            $table->string('status',5)->nullable();
            $table->foreignId('service_id')->constrained('services', 'id');
            $table->decimal('price', 10, 2)->nullable();
            $table->text('notes')->nullable();
            $table->integer('rating')->nullable();
            $table->text('review')->nullable();
            $table->string('cancellation_reason')->nullable();
            $table->timestamp('canceled_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->integer('duration_minutes')->nullable();
            $table->string('payment_method')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
