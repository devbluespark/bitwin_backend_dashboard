<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Customer;
use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
  
    public function index()
    {
       
        $customers = DB::table('bid_users')->get();
        return view('backend/customer/index',compact('customers'));
    }

  
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //not using
    }

    public function show($id)
    {
        try{
            $customer = DB::table('bid_users')->where('id',$id)->first();
            return view('backend/customer/show',compact('customer'));
        }catch(Exception $e){
            return redirect('backend/customers');
        }
       
    }

    
    public function edit(Customer $customer)
    {
        //not using
    }

   
    public function update(Request $request, Customer $customer)
    {
        //not using
    }

  
    public function destroy(Customer $customer)
    {
        //
    }
    //customer activate function
    public function activate(Request $request){
        
        try {
            $customer = DB::table('bid_users')->where('id',$request->id)->update(['user_active'=>'1']);   
            return redirect('backend/customers'); 
        } catch (\Exception $e) {
            return redirect('backend/customers');
        }
    }   
    //customer deactivate function
    public function deactivate(Request $request){

        try {           
            $customer = DB::table('bid_users')->where('id',$request->id)->update(['user_active'=>'0']);  
            return redirect('backend/customers');   
        } catch (\Exception $e) {
            return redirect('backend/customers');
        }
    }
}
