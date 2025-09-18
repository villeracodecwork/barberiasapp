<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('identification_type',10)->nullable();
            $table->string('identification_number',30)->nullable();
            $table->string('name',100);
            $table->string('last_name', 100);
            $table->string('phone',15)->nullable();
            $table->string('verification_code',15)->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_enabled')->default(true);
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('profile_picture')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
