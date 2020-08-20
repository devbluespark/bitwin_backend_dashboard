<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Package;
use Carbon\Carbon;
use PhpParser\Node\Expr\FuncCall;

class PackagesController extends Controller
{
    public function index(){
        $packages= Package::all();
        return view('backend.packages.index',compact('packages'));
    }

    public function create(){
        return view('backend/packages/create');
    }


    public function store(Request $request){


        $data=$request->validate([
            'package_name' => 'required|min:5',
            'package_description'=> 'required|min:5',
            'package_rolls' => 'required',
            'package_price'=> 'required',
            'package_active' => 'required',
    
        ]);

       $data['package_create_by'] = 'Kasun';
       $data['created_at'] = Carbon::now()->timestamp;
       $data['updated_at'] = null;

       Package::create($data);
       $request->session()->flash('message', 'Package has been successfully add..');
       return view('backend.packages.create');
    }

   
    public function show(Package $package){
        return view('backend.packages.show',compact('package'));
    }

   
    public function edit(Package $package){
        return view('backend.packages.edit',compact('package'));
    }

    
    public function update(Request $request, Package $package ){
    

        $validate_data=$request->validate([
            'package_name' => 'required|min:5',
            'package_description'=> 'required|min:5',
            'package_rolls' => 'required',
            'package_price'=> 'required',
            'package_active' => 'required',
        ]);

       
       $package->update($request->all());
    
       return redirect('backend/packages');
    }

    
    public function destroy($id){
        //
    }

   
    
}