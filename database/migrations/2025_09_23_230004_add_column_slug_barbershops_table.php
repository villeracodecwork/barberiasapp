<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('barbershops', function (Blueprint $table) {

            $table->string('slug')->after('name')->nullable();
            $table->unique('slug');
            $table->index('slug');
            
        });
    }

    public function down(): void
    {
        Schema::table('barbershops', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
