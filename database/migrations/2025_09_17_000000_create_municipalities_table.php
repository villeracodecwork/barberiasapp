<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->integer('code')->primary();
            $table->integer('department_code');
            $table->string('name');
            $table->timestamps();
            $table->foreign('department_code')->references('code')->on('departments');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('municipalities');
    }
};
