<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:roles.index')->only('index');
        $this->middleware('can:roles.create')->only('create', 'store');
        $this->middleware('can:roles.edit')->only('edit', 'update');
        $this->middleware('can:roles.destroy')->only('destroy');
    }

    public function index()
    {
        $roles = Role::all();
        return view('roles.index',[
            'roles' => $roles
        ]);
    }

    public function create()
    {
        $permissions = Permission::all();

        return view('roles.create',[
            'role' => new Role,
            'permissions' => $permissions
        ]);
    }

    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'name' => ['required', 'string', 'max:70']
        ]);

        $name = $request->input('name');

        $role = new Role;
        $role->name = $name;
        $permissions = $request->input('permissions');
        
        $role->save();
        
        $role->permissions()->sync($permissions);

        return redirect()->route('roles.index')->with('message', 'Rol Creado exitosamente');
    }

    public function show(Role $role)
    {
        return view('roles.show',[
            'role' => $role
        ]);
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();

        // $pruebas = $role->hasDirectPermission();
        return view('roles.edit',[
            'role' => $role,
            'permissions' => $permissions
        ]);
    }

    public function update(Request $request, Role $role)
    {
        $validate = $this->validate($request,[
            'name' => ['required', 'string', 'max:70']
        ]);

        $name = $request->input('name');

        $role->name = $name;
        $permissions = $request->input('permissions');
        
        $role->update();
        
        $role->permissions()->sync($permissions);

        return redirect()->route('roles.index',['role' => $role])->with('message', 'Rol editado exitosamente');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with('message', 'Rol eliminado exitosamente');
    }
}
