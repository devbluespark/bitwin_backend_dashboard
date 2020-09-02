<?php


use Illuminate\Http\Request;


namespace App\Http\Controllers\Frontend;

use App\Bid_Record;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
   //return all active products in frontend
    public function index()
    { 

        try{
            $products =Product::where('product_active',1)
                        ->where('product_delete_status',0)
                        ->get();

            foreach($products as $product){

                $product['bid_records_percentage']= $this->status_bar($product);
            }

            
            return view('frontend/product/index',compact('products'));

           
        
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

    
    

    public function status_bar($product){



        try {
            
           
                $how_many_bids= ($product->product_price /( $product->product_bid_rolls * 0.027 )); 
              
              $how_many_bids_int=intval($how_many_bids);
   
               if (($how_many_bids - $how_many_bids_int) > 0) {
                   $how_many_bids_int = $how_many_bids_int + 1 ;
               }
   
            
             $bid_records_count = Bid_Record::where('products_id', $product->id)->count();
       
            $bid_records_percentage =(( $bid_records_count/$how_many_bids_int )*100);
            return $bid_records_percentage;




        }catch (\Exception $e) {
            return $e->getMessage();
        }
        
        
    }
}