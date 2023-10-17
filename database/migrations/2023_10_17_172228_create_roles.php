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
        $role1 = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $role2 = Role::create(['name' => 'empresario', 'guard_name' => 'web']);
        
        $user = personas::find(1);
        $user->assignRole($role1);

        $user2 = personas::find(2);
        $user2->assignRole($role2);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
