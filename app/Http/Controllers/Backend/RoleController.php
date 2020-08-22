<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Role;
use Illuminate\Http\Request;
use App\Permission;

class RoleController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        try {

            $roles = Role::all();
            return view('backend.roles.index',compact('roles'));

        } catch (\Exception $e) {
            return $e->getMessage();
        } 
        
    }
   

    public function create(){

        $permissions = Permission::all();//Get all permissions
        return view('backend.roles.create', compact('permissions'));
    }
   

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name'=>'required|unique:roles|max:20|min:3',
            'permissions' =>'required',
            ]
        );

        try {

            $role = new Role();
            $role->name = $request->name;
            $role->save();
            if($request->permissions <> ''){
                $role->permissions()->attach($request->permissions);
            }
            return redirect()->route('roles.index')->with('success','Roles added successfully');
 
        } catch (\Exception $e) {
            return $e->getMessage();
        } 
    }
   
    
    public function edit($id) {
        try {
            
            $role = Role::findOrFail($id);
            $permissions = Permission::all();
            return view('backend.roles.edit', compact('role', 'permissions'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
  

    public function update(Request $request,$id){

        $role = Role::findOrFail($id);//Get role with the given id
        //Validate name and permission fields
        $this->validate($request, [
            'name'=>'required|max:20|min:3|unique:roles,name,'.$id,
            'permissions' =>'required',
        ]);

        try {

            $input = $request->except(['permissions']);
            $role->fill($input)->save();
            if($request->permissions <> ''){
                $role->permissions()->sync($request->permissions);
            }
            return redirect()->route('roles.index')->with('success','Roles updated successfully');
      
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    

    public function destroy($id){
        try {
            $role = Role::findOrFail($id);
            $role->delete();
            return redirect()->route('roles.index')
            ->with('success','Role deleted successfully!');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
        
    }



}