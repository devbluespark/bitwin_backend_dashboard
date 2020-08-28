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
                        ->where('package_delete_status','1')
                        ->get();
            if($packages){
                return "sry no available packages at this moment try again later"; 
            }
            else{
                return $packages;
            }
        
        }catch(Exception $e){

            return "sry no available packages at this moment try again later";
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

    public function show($id)
    {
        //
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
