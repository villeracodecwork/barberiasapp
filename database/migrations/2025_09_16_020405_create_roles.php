<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Role::create(['name' => 'cliente']);
        Role::create(['name' => 'barbero']);
        Role::create(['name' => 'superAdmin']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
