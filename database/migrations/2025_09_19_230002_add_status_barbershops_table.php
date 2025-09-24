<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('barbershops', function (Blueprint $table) {

            $table->string('status')->after('email');
            $table->string('website')->nullable()->after('email');
            $table->string('instagram')->nullable()->after('email');
            $table->string('facebook')->nullable()->after('email');
            $table->string('twitter')->nullable()->after('email');
            $table->string('tiktok')->nullable()->after('email');
            $table->string('youtube')->nullable()->after('email');
            $table->string('whatsapp')->nullable()->after('email');
            $table->string('operation_key')->nullable()->after('email');
            $table->unsignedBigInteger('admin_id')->nullable()->after('email');
            $table->index('status');

            //el codigo de operacion es un codigo unico que se genera para cada barberia y se utiliza para que el administrador pueda validar la barberia
            $table->unique('operation_key');
            $table->foreign('admin_id')->references('id')->on('users');

            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barbershops');
    }
};
