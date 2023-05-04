<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Kelving Payan',
            'phone' => '3549873214',
            'email' => 'kelvingpayan@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('kjmp1999')
        ]);

        // crear role Administrador
        $admin    = Role::create(['name' => 'Admin']);

        // crear permisos componente categories
        Permission::create(['name' => 'Category_Create']);
        Permission::create(['name' => 'Category_Search']);
        Permission::create(['name' => 'Category_Update']);
        Permission::create(['name' => 'Category_Destroy']);
        Permission::create(['name' => 'Product_Create']);
        Permission::create(['name' => 'Product_Search']);
        Permission::create(['name' => 'Product_Update']);
        Permission::create(['name' => 'Product_Destroy']);
        // asignar permisos al rol Admin sobre categories
        $admin->givePermissionTo(['Category_Create', 'Category_Search', 'Category_Update', 'Category_Destroy']);
        $admin->givePermissionTo(['Product_Create', 'Product_Search', 'Product_Update', 'Product_Destroy']);
        // asignar role Admin al usuario Luis Fax
        $uAdmin = User::find(1);
        $uAdmin->assignRole('Admin');
    }
}
