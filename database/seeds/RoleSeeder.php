<?php

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
        // crear roles
        $admin = Role::create(['name' => 'admin']);
        $tutor = Role::create(['name' => 'tutor']);

        // crear permiso
        Permission::create(['name' => 'dashboard',
                            'description' => 'ver el Dashboard'
                            ])->syncRoles([$admin, $tutor, ]);


        // permisos crud de usuarios
        Permission::create(['name' => 'user.index',
                            'description' => '***** Ver lista de Usuarios *****'
                            ])->syncRoles([$admin, $tutor]);
        Permission::create(['name' => 'user.create',
                            'description' => 'Crear nuevos Usuarios'
                            ])->syncRoles([$admin, $tutor]);
        Permission::create(['name' => 'user.destroy',
                            'description' => 'Eliminar Usuarios'
                            ])->syncRoles([$admin]);
        Permission::create(['name' => 'user.role',
                            'description' => 'asignar rol a  Usuarios'
                            ])->syncRoles([$admin, $tutor]);

        // permisos crud de roles
        Permission::create(['name' => 'roles.index',
                            'description' => '***** Ver lista de Roles *****'
                            ])->syncRoles([$admin]);
        Permission::create(['name' => 'roles.create',
                            'description' => 'Crear nuevos Roles'
                            ])->syncRoles([$admin]);
        Permission::create(['name' => 'roles.edit',
                            'description' => 'Editar roles'
                            ])->syncRoles([$admin]);
        Permission::create(['name' => 'roles.destroy',
                            'description' => 'Eliminar roles'
                            ])->syncRoles([$admin]);

        // permisos crud de Vendedores
        Permission::create(['name' => 'seller.index',
                            'description' => '***** Ver lista de Vendedores *****'
                            ])->syncRoles([$admin, $tutor]);
        Permission::create(['name' => 'seller.create',
                            'description' => 'Crear nuevos Vendedores'
                            ])->syncRoles([$admin, $tutor]);
        Permission::create(['name' => 'seller.edit',
                            'description' => 'Editar Vendedores'
                            ])->syncRoles([$admin, $tutor]);
        Permission::create(['name' => 'seller.destroy',
                            'description' => 'Eliminar Vendedores'
                            ])->syncRoles([$admin]);

        // permisos crud de SubCategorias
        Permission::create(['name' => 'sub_category.index',
                            'description' => '***** Ver lista de SubCategorias *****'
                            ])->syncRoles([$admin, ]);
        Permission::create(['name' => 'sub_category.create',
                            'description' => 'Crear nuevas SubCategorias'
                            ])->syncRoles([$admin, ]);
        Permission::create(['name' => 'sub_category.edit',
                            'description' => 'Editar SubCategorias'
                            ])->syncRoles([$admin, ]);
        Permission::create(['name' => 'sub_category.destroy',
                            'description' => 'Eliminar SubCategorias'
                            ])->syncRoles([$admin]);
    }
}
