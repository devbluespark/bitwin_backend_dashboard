<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Permission;
use Illuminate\Http\Request;
use App\Role;

class PermissionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            $permissions = Permission::all();
            return view('backend.permissions.index', compact('permissions'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        
    }


    public function create(){
        try {

            $roles = Role::get(); //Get all roles
            return view('backend.permissions.create', compact('roles'));

        }catch (\Exception $e) {
            return $e->getMessage();
        }
     }

   
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|max:20|min:3',
            ]);

         try {
            
            $permission = new Permission();
            $permission->name = $request->name;
            $permission->save();

        if ($request->roles <> '') {
            foreach ($request->roles as $key => $value) {
                $role = Role::find($value);
                $role->permissions()->attach($permission);
            }
        }

        return redirect()->route('permissions.index')->with('success', 'Permission added successfully');
            
         }catch (\Exception $e) {
            return $e->getMessage();
        }  
        
    }

    public function edit(Permission $permission){
        return view('backend.permissions.edit', compact('permission'));
    }
    

    public function update(Request $request, Permission $permission){
       
        $this->validate($request, [
            'name' => 'required|max:20|min:3',
        ]);

        try {
            
            $permission->name = $request->name;
            $permission->save();
            return redirect()->route('permissions.index')
            ->with('success','Permission' . $permission->name . ' updated!');

        }catch (\Exception $e) {
            return $e->getMessage();
         } 
        
    }
   

    public function destroy(Permission $permission){

        try {
            
            $permission->delete();
            return back()->with('success','Permission deleted successfully!');

        } catch (\Exception $e) {
            return $e->getMessage();
         } 
    }


}