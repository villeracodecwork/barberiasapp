<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->integer('code')->primary();
            $table->string('name');
            $table->timestamps();
        });

        $departaments = [
            ['code' => 5,  'name' => 'ANTIOQUIA'],
            ['code' => 8,  'name' => 'ATLÁNTICO'],
            ['code' => 11, 'name' => 'BOGOTÁ.D.C.'],
            ['code' => 13, 'name' => 'BOLÍVAR'],
            ['code' => 15, 'name' => 'BOYACÁ'],
            ['code' => 17, 'name' => 'CALDAS'],
            ['code' => 18, 'name' => 'CAQUETÁ'],
            ['code' => 19, 'name' => 'CAUCA'],
            ['code' => 20, 'name' => 'CESAR'],
            ['code' => 23, 'name' => 'CÓRDOBA'],
            ['code' => 25, 'name' => 'CUNDINAMARCA'],
            ['code' => 27, 'name' => 'CHOCÓ'],
            ['code' => 41, 'name' => 'HUILA'],
            ['code' => 44, 'name' => 'GUAJIRA'],
            ['code' => 47, 'name' => 'MAGDALENA'],
            ['code' => 50, 'name' => 'META'],
            ['code' => 52, 'name' => 'NARIÑO'],
            ['code' => 54, 'name' => 'NORTE DE SANTANDER'],
            ['code' => 63, 'name' => 'QUINDÍO'],
            ['code' => 66, 'name' => 'RISARALDA'],
            ['code' => 68, 'name' => 'SANTANDER'],
            ['code' => 70, 'name' => 'SUCRE'],
            ['code' => 73, 'name' => 'TOLIMA'],
            ['code' => 76, 'name' => 'VALLE DEL CAUCA'],
            ['code' => 81, 'name' => 'ARAUCA'],
            ['code' => 85, 'name' => 'CASANARE'],
            ['code' => 86, 'name' => 'PUTUMAYO'],
            ['code' => 88, 'name' => 'ARCHIPIELAGO DE SAN ANDRES, PROVIDENCIA'],
            ['code' => 91, 'name' => 'AMAZONAS'],
            ['code' => 94, 'name' => 'GUAINÍA'],
            ['code' => 95, 'name' => 'GUAVIARE'],
            ['code' => 97, 'name' => 'VAUPÉS'],
            ['code' => 99, 'name' => 'VICHADA'],
        ];
        
        DB::table('departments')->insert($departaments);
    }

    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
