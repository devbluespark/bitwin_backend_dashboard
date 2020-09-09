<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;



class ProductsController extends Controller
{
   
    public function index()
    {
       $products=Product::where('product_delete_status','0')->get();
    
        return view('backend/products/index',compact('products'));
    }

    
    public function create()
    {
        return view('backend/products/create'); 
    }

    public function store(Request $request)
    {
        if($request->has('product_featured')){
            $featured=1;
        }else{
            $featured=0;
        }
        $validatedData = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric|min:1|max:1000000',
            'product_bid_rolls' => 'required|numeric|min:1|max:1000000',
            'product_bid_min_value' =>'required|numeric|min:1|max:1000000',
            'product_bid_max_value' =>'required|numeric|min:1|max:1000000',
            'product_img_1' =>'required',
            'product_img_2' =>'required',           
        ]);

        try{

            if($request->hasFile('product_img_1')){
                $filenameWithExt = $request->file('product_img_1')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extension = $request->file('product_img_1')->getClientOriginalExtension();
                $img_1_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
                $path = $request->file('product_img_1')->storeAs('public/images/products',$img_1_filenameToStore);
    
            }
            else{
                $img_1_filenameToStore ='noimage.jpg';
            }
            if($request->hasFile('product_img_2')){
                $filenameWithExt = $request->file('product_img_2')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extension = $request->file('product_img_2')->getClientOriginalExtension();
                $img_2_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
                $path = $request->file('product_img_2')->storeAs('public/images/products',$img_2_filenameToStore);
    
            }
            else{
                $img_2_filenameToStore ='noimage.jpg';
            }
            if($request->hasFile('product_img_3')){
                $filenameWithExt = $request->file('product_img_3')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extension = $request->file('product_img_3')->getClientOriginalExtension();
                $img_3_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
                $path = $request->file('product_img_3')->storeAs('public/images/products',$img_3_filenameToStore);
    
            }
            else{
                $img_3_filenameToStore ='noimage.jpg';
            }
            if($request->hasFile('product_img_4')){
                $filenameWithExt = $request->file('product_img_4')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extension = $request->file('product_img_4')->getClientOriginalExtension();
                $img_4_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
                $path = $request->file('product_img_4')->storeAs('public/images/products',$img_4_filenameToStore);
    
            }
            else{
                $img_4_filenameToStore ='noimage.jpg';
            }
            if($request->hasFile('product_img_5')){
                $filenameWithExt = $request->file('product_img_5')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extension = $request->file('product_img_5')->getClientOriginalExtension();
                $img_5_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
                $path = $request->file('product_img_5')->storeAs('public/images/products',$img_5_filenameToStore);
    
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
            // $product->product_expired=$request->product_expired;
            $product->product_featured=$featured;
            $product->product_create_by="dev";
            $product->product_active=0;
            $product->save();
    
            return redirect()->back()->with('suc','Successfully Added') ;       
        }
        catch(Exception $e){
            return redirect()->back()->with('er','Something Wrong') ;       
    
        }
    }

    public function show($id)
    {
        $product=Product::find($id);
        return view('backend/products/show',compact('product'));
    }

    //edit existing product---------------------------------------------
    public function edit($id)
    {
        $product=Product::where('id',$id)->first();
        return view('backend/products/edit',compact('product'));
     
      
    }

    public function update(Request $request, Product $product )
    {
        try{

        $validatedData = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric|min:1',
            'product_bid_rolls' => 'required|numeric|min:1|max:1000',
            'product_bid_min_value' =>'required|numeric|min:1|max:1000',
            'product_bid_max_value' =>'required|numeric|min:1|max:1000',
                   
        ]);
        if($request->hasFile('product_img_1')){
            $filenameWithExt = $request->file('product_img_1')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_img_1')->getClientOriginalExtension();
            $img_1_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
            $path = $request->file('product_img_1')->storeAs('public/images',$img_1_filenameToStore);

        }
       
        if($request->hasFile('product_img_2')){
            $filenameWithExt = $request->file('product_img_2')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_img_2')->getClientOriginalExtension();
            $img_2_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
            $path = $request->file('product_img_2')->storeAs('public/images',$img_2_filenameToStore);

        }
       
        if($request->hasFile('product_img_3')){
            $filenameWithExt = $request->file('product_img_3')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_img_3')->getClientOriginalExtension();
            $img_3_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
            $path = $request->file('product_img_3')->storeAs('public/images',$img_3_filenameToStore);

        }
       
        if($request->hasFile('product_img_4')){
            $filenameWithExt = $request->file('product_img_4')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_img_4')->getClientOriginalExtension();
            $img_4_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
            $path = $request->file('product_img_4')->storeAs('public/images',$img_4_filenameToStore);

        }
       
        if($request->hasFile('product_img_5')){
            $filenameWithExt = $request->file('product_img_5')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_img_5')->getClientOriginalExtension();
            $img_5_filenameToStore = $filename.'_'.time().'.'.$extension; //The Timestamp makes each image's name unique
            $path = $request->file('product_img_5')->storeAs('public/images',$img_5_filenameToStore);

        }
       

        $product->update($request->all());
        if($request->hasFile('product_img_1')){
        $product->product_img_1=$img_1_filenameToStore;
        }
        if($request->hasFile('product_img_2')){
        $product->product_img_2=$img_2_filenameToStore;
        }
        if($request->hasFile('product_img_3')){
        $product->product_img_3=$img_3_filenameToStore;
        }
        if($request->hasFile('product_img_4')){
        $product->product_img_4=$img_4_filenameToStore;
        }
        if($request->hasFile('product_img_5')){
        $product->product_img_5=$img_5_filenameToStore;
        }
        $product->save();
    
        return redirect('backend/products')->with('suc','Successfully Updated') ;  
        }
        catch(Exeption $e){
            return redirect()->back()->with('er','Updating canselled') ;   
        }
    }

  
    public function destroy($id)
    {
        
    }
    public function publish(Request $request){
        try {
            
            $product_id= $request->id;
            $product=Product::find($product_id);
            $product->product_active = "1";
    
            $product->save();
            return redirect('backend/products');
    
        } catch (\Exception $e) {
            return redirect('backend/products');
        }
    }

    public function unpublish(Request $request){
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

    public function delete(Request $request){

        try {
            
            $product_id= $request->id;
            $product=Product::find($product_id);
            $product->product_delete_status = 1;
    
            $product->save();
            return redirect('backend/products');
    
        } catch (\Exception $e) {
            return redirect('backend/products');
        }
      
        
    }
  
}