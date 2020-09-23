<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Package;
use App\User;
use App\Us_To_Lkr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class PackagesController extends Controller
{
    public function index(){

        try {
            $packages= Package::where('package_delete_status', 0)->get();
            return view('backend.packages.index',compact('packages'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function create(){
        return view('backend/packages/create');
    }


    public function store(Request $request){


            $data=$request->validate([
                'package_name' => 'required|min:5',
                'package_description'=> 'required|min:5',
                'package_rolls' => 'required|numeric|min:1|max:1000',
                'package_price'=> 'required|numeric|min:1|max:1000',
                'package_active' => 'required',

            ]);

           $data['package_delete_status'] = 0;
           $data['users_id'] = Auth::id();
           $data['created_at'] = Carbon::now()->timestamp;
           $data['updated_at'] = null;

           $us_to_lkr = Us_To_Lkr::find(1);
           $data['package_us_to_lk'] =$us_to_lkr->us_to_lkr ;


           Package::create($data);
           $request->session()->flash('message', 'Package has been successfully add..');
           return view('backend.packages.create');


    }


    public function show(Package $package){


       try {
            $user = User::find($package->users_id);
            return view('backend.packages.show',compact('package','user'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }


    public function edit(Package $package){

        try {
            return view('backend.packages.edit',compact('package'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }


    public function update(Request $request, Package $package ){



            $validate_data=$request->validate([
                'package_name' => 'required|min:5',
                'package_description'=> 'required|min:5',
                'package_rolls' => 'required|numeric|min:1|max:1000',
                'package_price'=> 'required|numeric|min:1|max:1000',
                'package_active' => 'required',
            ]);


           $package->update($validate_data);

           return redirect('backend/packages');

    }


    public function destroy(Package $package ,Request $request){
        try {

            $package_id= $request->id;
            $delete_package=Package::find($package_id);
            $delete_package->package_delete_status = 1;

            $delete_package->save();
            return redirect('backend/packages');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }



}
