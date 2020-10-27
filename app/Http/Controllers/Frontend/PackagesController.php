<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Package;
use App\Us_To_Lkr;

class PackagesController extends Controller
{

    //show all packages in frontend
    public function index()
    {
        try{
            $packages =Package::where('package_active','1')
                        ->where('package_delete_status','0')
                        ->get();

             $lk_to_us = Us_To_Lkr::first();

            foreach ($packages as $package){
                $package['lk_price'] = $package['package_price'] * $lk_to_us['us_to_lkr'] ;

            }


            return view('frontend/package/index',compact('packages')) ;


        }catch (\Exception $e) {
            return $e->getMessage();
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
