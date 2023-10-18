<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\personas;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Role::create(['name' => 'admin', 'guard_name' => 'web']);
        Role::create(['name' => 'empresario', 'guard_name' => 'web']);
        Role::create(['name' => 'lider', 'guard_name' => 'web']);
        Role::create(['name' => 'director', 'guard_name' => 'web']);
        Role::create(['name' => 'gerente', 'guard_name' => 'web']);
        Role::create(['name' => 'vicepresidente', 'guard_name' => 'web']);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
