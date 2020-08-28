<?php


use Illuminate\Http\Request;


namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Product;



class ProductController extends Controller
{
   //return all active products in frontend
    public function index()
    {

        try{
            $products =Product::where('product_active','0')
                        ->where('product_delete_status','1')
                        ->get();
                       
             if($products){
                  return $products; 
                 }
             else{
                 return $packages;
                }
        
        }catch(Exception $e){
           
            return "sry no available products at this moment try again later";
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
