<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('barbers', function (Blueprint $table) {

            $table->unsignedBigInteger('barbershop_id')->after('person_id');
            $table->boolean('is_active')->default(true)->after('barbershop_id');
            $table->string('description')->nullable()->after('is_active');

            $table->foreign('barbershop_id',"barbers_barbershop_fk")->references('id')->on('barbershops');
        });

        Schema::table('people', function (Blueprint $table) {

            $table->string('last_name')->nullable()->change();

            //obligatorio el telefono
            $table->string('phone')->nullable(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('barbers', function (Blueprint $table) {
            $table->dropForeign("barbers_barbershop_fk");
            $table->dropColumn('barbershop_id');
        });

        Schema::table('people', function (Blueprint $table) {
            $table->string('last_name')->nullable(false)->change();

            //obligatorio el telefono
            $table->string('phone')->nullable()->change();
        });
    }
};
