<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 = Role::create(['name' => 'Admin']);
       $role2 = Role::create(['name' => 'Blogger']);
       
    Permission::create(['name' => 'admin.home', 
                        'description' => 'Ver el Dashboard'])
                        ->syncRoles([$role1, $role2]);

    /* Roles */
    Permission::create(['name' => 'admin.users.index', 
                        'description' => 'Ver Listado de Usuarios'])
                        ->syncRoles([$role1]);
    Permission::create(['name' => 'admin.users.edit', 
                        'description' => 'Asignar un Rol'])
                        ->syncRoles([$role1]);
/*     Permission::create(['name' => 'admin.users.update', 
                        'description' => ''])
                        ->syncRoles([$role1]); */

    /* Categories */
    Permission::create(['name' => 'admin.categories.index', 
                        'description' => 'Ver Listado de categorias'])
                        ->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'admin.categories.create', 
                        'description' => 'Crear Categorias'])
                        ->syncRoles([$role1]);
    Permission::create(['name' => 'admin.categories.edit', 
                        'description' => 'Eliminar Categorias'])
                        ->syncRoles([$role1]);
    Permission::create(['name' => 'admin.categories.destroy', 
                        'description' => 'Eliminar Categorias'])
                        ->syncRoles([$role1]);

    /* Tags */
    Permission::create(['name' => 'admin.tags.index', 
                        'description' => 'Ver listado de etiquetas'])->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'admin.tags.create', 
                        'description' => 'Crear etiqueta'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.tags.edit', 
                        'description' => 'Editar etiquetas'])->syncRoles([$role1]);
    Permission::create(['name' => 'admin.tags.destroy', 
                        'description' => 'Eliminar Etiquetas'])->syncRoles([$role1]);

    /* Posts */
    Permission::create(['name' => 'admin.posts.index', 
                        'description' => 'Ver listado de Posts'])
                        ->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'admin.posts.create', 
                        'description' => 'Crear Posts'])
                        ->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'admin.posts.edit', 
                        'description' => 'Editar Posts'])
                        ->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'admin.posts.destroy', 
                        'description' => 'Eliminar Posts'])
                        ->syncRoles([$role1, $role2]);
    }
}
