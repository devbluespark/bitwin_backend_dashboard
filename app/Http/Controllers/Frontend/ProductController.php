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
             $products =Product::where('product_active','1')
                        ->where('product_delete_status','0')
                        ->get();
   
             
            // return view('frontend/bid_item/index',compact('products')) ;
           
        
        
        }catch (\Exception $e) {
            return $e->getMessage();
        }
        

    }

  
   //view a product details
    public function show($id)
    {
        try{
            $product =Product::where('id',$id)
                        ->first();            
            return view('frontend/product/show',compact('product')) ;  
            
        
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    
}