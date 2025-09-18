<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barbershop_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barbershop_id')->constrained('barbershops');
            $table->decimal('amount', 10, 2);
            $table->date('payment_date');
            $table->date('end_date')->nullable();
            $table->string('payment_method',50)->nullable();
            $table->string('status',5)->default('completed');
            $table->text('notes')->nullable();
            $table->string('plan_type',10)->nullable();
            $table->integer('plan_duration_months')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barbershop_payments');
    }
};
