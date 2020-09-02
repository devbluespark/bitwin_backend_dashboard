<?php


use Illuminate\Http\Request;


namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
   //return all active products in frontend
    public function index()
    { 

        try{
            $products =Product::where('product_active','0')
                        ->where('product_delete_status','0')
                        ->get();
                       
             if($products){
                return view('frontend/product/index',compact('products')) ;
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

   //view a product details
    public function show($id)
    {
        try{
            $product =Product::where('id',$id)
                        ->first();            
            return view('frontend/product/show',compact('product')) ;  
            
        
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
