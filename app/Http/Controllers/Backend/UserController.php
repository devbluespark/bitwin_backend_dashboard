<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index(){
       try {
            $users = User::where('user_delete_status', 0)->get();
            return view('backend.users.index', compact('users'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }    

    }


    public function create(){
        try {
            $roles = Role::get();        
             return view('backend.users.create', compact('roles'));
        } catch (\Exception $e) {
            return $e->getMessage();
        } 
        
    }


    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:20|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        try {
            
            $user = User::create($request->except('roles'));
            
            if($request->roles <> ''){
                $user->roles()->attach($request->roles);
            }
            return redirect()->route('users.index')->with('success','User has been created');            
 
        } catch (\Exception $e) {
            return $e->getMessage();
        } 
        
    }

    
    public function edit($id) {

        try {
            
        $user = User::findOrFail($id);
        $roles = Role::get(); 
        return view('backend.users.edit', compact('user', 'roles'));

        } catch (\Exception $e) {
            return $e->getMessage();
        } 

    }

    public function update(Request $request, $id) {
           
        $this->validate($request, [
            'name'=>'required|max:20|min:3',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|string|min:6|confirmed',
            'roles' => 'required'
        ]);

        try {
            $user = User::findOrFail($id);
            $input = $request->except('roles');
            $user->fill($input)->save();
            if ($request->roles <> '') {
                $user->roles()->sync($request->roles);        
            }        
            else {
                $user->roles()->detach(); 
            }
            return redirect()->route('users.index')->with('success',
                 'User successfully updated.');
        } catch (\Exception $e) {
            return $e->getMessage();
        }    
    }
    

    public function destroy($id) {
 
        try {
            
            $delete_user=User::find($id);
            $delete_user->user_delete_status = 1;
    
            $delete_user->save();
            return redirect('backend/users');

        } catch (\Exception $e) {
            return $e->getMessage();
        } 
        
    
    }


}