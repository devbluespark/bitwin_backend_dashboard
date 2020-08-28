<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Package;

class PackagesController extends Controller
{
   
    //show all packages in frontend
    public function index()
    {
        try{
            $packages =Package::where('package_active','0')
                        ->where('package_delete_status','0')
                        ->get();
           if($packages){
            
            return view('frontend/package/index',compact('packages')) ;  
           }else{
            return redirect()->back(); 
           }
            
        
        }catch(Exception $e){

            return redirect()->back();
        }
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    //view a package detail
    public function show($id)
    {
        try{
            $package =Package::where('id',$id)
                        ->first();   
                     
            return view('frontend/package/show',compact('package')) ;  
            
        
        }catch(Exception $e){
           
            return redirect()->back();
        }
    }

  
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
