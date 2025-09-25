<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('schedules', function (Blueprint $table) {

            //colocar nullable la columna de barber_id
            $table->unsignedBigInteger('barber_id')->nullable()->change();
            $table->integer('type_owner')->nullable()->after('is_active');
            
        });

       
    }

    public function down(): void
    {

        Schema::table('schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('barber_id')->nullable(false)->change();
            $table->dropColumn('type_owner');
        });
        
    }
};
