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
        // $customers=Customer::where('user_active','1')->get();
        $customers = DB::table('bid_users')->get();
    
        // return $customers;
        return view('backend/customer/index',compact('customers'));
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
        $customer = DB::table('bid_users')->where('id',$id)->first();
        return view('backend/customer/show',compact('customer'));
    }

    
    public function edit(Customer $customer)
    {
        //
    }

   
    public function update(Request $request, Customer $customer)
    {
        //
    }

  
    public function destroy(Customer $customer)
    {
        //
    }

    public function activate(Request $request){
        try {
            
            $product_id= $request->id;
            $product=Product::find($product_id);
            $product->product_active = "0";
    
            $product->save();
            return redirect('backend/products');
    
        } catch (\Exception $e) {
            return redirect('backend/products');
        }
    }   
    public function deactivate(Request $request){
        try {
            
            $product_id= $request->id;
            $product=Product::find($product_id);
            $product->product_active = "0";
    
            $product->save();
            return redirect('backend/products');
    
        } catch (\Exception $e) {
            return redirect('backend/products');
        }
    }
}
