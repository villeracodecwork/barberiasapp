<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointment_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loggable_id');
            $table->string('loggable_type');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->string('action');
            $table->json('old_data')->nullable();
            $table->json('new_data')->nullable();
            $table->timestamps();
            $table->index(['loggable_id', 'loggable_type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointment_logs');
    }
};
