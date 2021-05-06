<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }
    public function create()
    {
       $persmissions=  Permission::all();
        return view('admin.roles.create', compact('persmissions'));
    }
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required'
        ]);
        $role = Role::create($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('admin.roles.edit', $role)->with('info', 'El rol se ha creado con exito');
    }
    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    public function edit(Role $role)
    {
        $persmissions =  Permission::all();
        return view('admin.roles.edit', compact('role', 'persmissions'));
    }
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required'
            ]);
        $role->update($request->all());  
        $role->permissions()->sync($request->permissions);
        return redirect()->route('admin.roles.edit', $role)->with('info', 'El rol se ha actualizado con exito');
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index', $role)->with('info', 'El rol se ha eliminado con exito');
    }
}
