<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
   
    public function index()
    {
        $products=Product::all();
        return view('backend/products/index',compact('products'));
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

    //edit existing product---------------------------------------------
    public function edit(Request $request,$id)
    {
        try{
            $product=Product::find($id);
            // return $product;
            $product->product_name=$request->product_name;
            $product->product_price=$request->product_price;
            $product->product_bid_rolls=$request->product_bid_rolls;
            $product->product_bid_min_value=$request->product_bid_min_value;
            $product->product_bid_max_value=$request->product_bid_max_value;
            $product->product_expired=$request->product_expired;
            $product->product_featured=$request->product_featured;
            $product->save();
            $products=Product::all();
            return view('backend/products/index',compact('products'));
        }
        catch(Exception $e){
            return view('backend/products/index',compact('products'));
        }
      
    }

    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }

    //store new product---------------------------------------------
    public function productstore(Request $request){

        try{

        if($request->hasFile('product_img_1')){
            $filenameWithExt = $request->file('product_img_1')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_img_1')->getClientOriginalExtension();
            $img_1_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
            $path = $request->file('product_img_1')->storeAs('public/images',$img_1_filenameToStore);

        }
        else{
            $img_1_filenameToStore ='noimage.jpg';
        }
        if($request->hasFile('product_img_2')){
            $filenameWithExt = $request->file('product_img_2')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_img_2')->getClientOriginalExtension();
            $img_2_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
            $path = $request->file('product_img_2')->storeAs('public/images',$img_2_filenameToStore);

        }
        else{
            $img_2_filenameToStore ='noimage.jpg';
        }
        if($request->hasFile('product_img_3')){
            $filenameWithExt = $request->file('product_img_3')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_img_3')->getClientOriginalExtension();
            $img_3_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
            $path = $request->file('product_img_3')->storeAs('public/images',$img_3_filenameToStore);

        }
        else{
            $img_3_filenameToStore ='noimage.jpg';
        }
        if($request->hasFile('product_img_4')){
            $filenameWithExt = $request->file('product_img_4')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_img_4')->getClientOriginalExtension();
            $img_4_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
            $path = $request->file('product_img_4')->storeAs('public/images',$img_4_filenameToStore);

        }
        else{
            $img_4_filenameToStore ='noimage.jpg';
        }
        if($request->hasFile('product_img_5')){
            $filenameWithExt = $request->file('product_img_5')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_img_5')->getClientOriginalExtension();
            $img_5_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
            $path = $request->file('product_img_5')->storeAs('public/images',$img_5_filenameToStore);

        }
        else{
            $img_5_filenameToStore ='noimage.jpg';
        }

        $product=new Product();
        $product->product_name=$request->product_name;
        $product->product_price=$request->product_price;
        $product->product_bid_rolls=$request->product_bid_rolls;
        $product->product_bid_min_value=$request->product_bid_min_value;
        $product->product_bid_max_value=$request->product_bid_max_value;
        $product->product_img_1=$img_1_filenameToStore;
        $product->product_img_2=$img_2_filenameToStore;
        $product->product_img_3=$img_3_filenameToStore;
        $product->product_img_4=$img_4_filenameToStore;
        $product->product_img_5=$img_5_filenameToStore;
        $product->product_expired=$request->product_expired;
        $product->product_featured=$request->product_featured;
        $product->save();

        // Product::create($request->all());   
        return view('backend/products/index');
    }
    catch(Exception $e){
        return view('backend/products/index');
    }

    } 
    public function addproductindex(){
        return view('backend/products/create'); 

    }
    public function editproductindex($id){
        $product=Product::where('id',$id)->first();
        return view('backend/products/edit',compact('product'));

    }
}
