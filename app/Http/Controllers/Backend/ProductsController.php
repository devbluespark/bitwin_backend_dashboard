<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;



class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::where('product_delete_status', '0')->get();

        return view('backend/products/index', compact('products'));
    }


    public function create()
    {
        return view('backend/products/create');
    }

    public function store(Request $request)
    {


        if ($request->has('product_offers')) {
            $data['product_offer'] = 1;
        } else {
            $data['product_offer'] = 0;
        }

        $data = $request->validate([
            'product_name' => 'required|min:5',
            'product_price' => 'required|numeric|min:1|max:10000000000',
            'product_bid_rolls' => 'required|numeric|min:1|max:100000',
            'product_bid_min_value' => 'required|numeric|min:1|max:100000',
            'product_bid_max_value' => 'required|numeric|min:1|max:100000',
            'product_img_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'product_img_2' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'product_img_3' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'product_img_4' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'product_img_5' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'product_level' => 'required',
            'product_discription' =>'required|min:5'
            // 'date'          => 'required'
        ]);


        if ($files = $request->file('product_img_1')) {
            $destinationPath = 'storage/images/products/'; // upload path
            $profileImage = date('YmdHis').str_random(5). "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['product_img_1'] = "$profileImage";

            $data['product_img_1'] = implode($insert);
        }

        if ($files = $request->file('product_img_2')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis').str_random(5). "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['product_img_2'] = "$profileImage";

            $data['product_img_2'] = implode($insert);
        }

        if ($files = $request->file('product_img_3')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis').str_random(5). "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['product_img_3'] = "$profileImage";

            $data['product_img_3'] = implode($insert);
        }

        if ($files = $request->file('product_img_4')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis').str_random(5). "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['product_img_4'] = "$profileImage";

            $data['product_img_4'] = implode($insert);
        }

        if ($files = $request->file('product_img_5')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis').str_random(5). "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['product_img_5'] = "$profileImage";

            $data['product_img_5'] = implode($insert);
        }
      

      

            $data['users_id'] = Auth::id();
            $data['updated_at'] = null;
            $data['product_active']= 0;
            $data['product_delete_status']= 0;
            $data['product_expired_date']= $request->date;


            Product::create($data);

            return redirect()->back()->with('suc','Successfully Added') ;       
            
    }


    public function show($id){
        $product = Product::find($id);
        return view('backend/products/show', compact('product'));
    }



    
    //edit existing product---------------------------------------------
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('backend/products/edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        try {

            $validatedData = $request->validate([
                'product_name' => 'required',
                'product_price' => 'required|numeric|min:1',
                'product_bid_rolls' => 'required|numeric|min:1|max:1000',
                'product_bid_min_value' => 'required|numeric|min:1|max:1000',
                'product_bid_max_value' => 'required|numeric|min:1|max:1000',

            ]);
            if ($request->hasFile('product_img_1')) {
                $filenameWithExt = $request->file('product_img_1')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('product_img_1')->getClientOriginalExtension();
                $img_1_filenameToStore = $filename . '_' . time() . '.' . $extension; //The Timestamp makes each image's name unique
                $path = $request->file('product_img_1')->storeAs('public/images', $img_1_filenameToStore);
            }

            if ($request->hasFile('product_img_2')) {
                $filenameWithExt = $request->file('product_img_2')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('product_img_2')->getClientOriginalExtension();
                $img_2_filenameToStore = $filename . '_' . time() . '.' . $extension; //The Timestamp makes each image's name unique
                $path = $request->file('product_img_2')->storeAs('public/images', $img_2_filenameToStore);
            }

            if ($request->hasFile('product_img_3')) {
                $filenameWithExt = $request->file('product_img_3')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('product_img_3')->getClientOriginalExtension();
                $img_3_filenameToStore = $filename . '_' . time() . '.' . $extension; //The Timestamp makes each image's name unique
                $path = $request->file('product_img_3')->storeAs('public/images', $img_3_filenameToStore);
            }

            if ($request->hasFile('product_img_4')) {
                $filenameWithExt = $request->file('product_img_4')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('product_img_4')->getClientOriginalExtension();
                $img_4_filenameToStore = $filename . '_' . time() . '.' . $extension; //The Timestamp makes each image's name unique
                $path = $request->file('product_img_4')->storeAs('public/images', $img_4_filenameToStore);
            }

            if ($request->hasFile('product_img_5')) {
                $filenameWithExt = $request->file('product_img_5')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('product_img_5')->getClientOriginalExtension();
                $img_5_filenameToStore = $filename . '_' . time() . '.' . $extension; //The Timestamp makes each image's name unique
                $path = $request->file('product_img_5')->storeAs('public/images', $img_5_filenameToStore);
            }


            $product->update($request->all());
            if ($request->hasFile('product_img_1')) {
                $product->product_img_1 = $img_1_filenameToStore;
            }
            if ($request->hasFile('product_img_2')) {
                $product->product_img_2 = $img_2_filenameToStore;
            }
            if ($request->hasFile('product_img_3')) {
                $product->product_img_3 = $img_3_filenameToStore;
            }
            if ($request->hasFile('product_img_4')) {
                $product->product_img_4 = $img_4_filenameToStore;
            }
            if ($request->hasFile('product_img_5')) {
                $product->product_img_5 = $img_5_filenameToStore;
            }
            $product->save();

            return redirect('backend/products')->with('suc', 'Successfully Updated');
        } catch (Exeption $e) {
            return redirect()->back()->with('er', 'Updating canselled');
        }
    }


    public function destroy($id)
    {
    }
    public function publish(Request $request)
    {
        try {

            $product_id = $request->id;
            $product = Product::find($product_id);
            $product->product_active = "1";

            $product->save();
            return redirect('backend/products');
        } catch (\Exception $e) {
            return redirect('backend/products');
        }
    }

    public function unpublish(Request $request)
    {
        try {

            $product_id = $request->id;
            $product = Product::find($product_id);
            $product->product_active = "0";

            $product->save();
            return redirect('backend/products');
        } catch (\Exception $e) {
            return redirect('backend/products');
        }
    }

    public function delete(Request $request)
    {

        try {

            $product_id = $request->id;
            $product = Product::find($product_id);
            $product->product_delete_status = 1;

            $product->save();
            return redirect('backend/products');
        } catch (\Exception $e) {
            return redirect('backend/products');
        }
    }
}