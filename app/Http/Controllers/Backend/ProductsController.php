<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Carbon\Carbon;
use Facade\FlareClient\Stacktrace\File as StacktraceFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Str;

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
            'product_discription' => 'required|min:5'
            // 'date'          => 'required'
        ]);


        if ($files = $request->file('product_img_1')) {
            $destinationPath = 'storage/images/products/'; // upload path
            $profileImage = date('YmdHis') . Str::random(10) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            // $insert['product_img_1'] = "$profileImage";
            $data['product_img_1'] = $profileImage;
        }

        if ($files = $request->file('product_img_2')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis') . Str::random(10) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            // $insert['product_img_2'] = "$profileImage";

            $data['product_img_2'] = $profileImage;
        }

        if ($files = $request->file('product_img_3')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis') . Str::random(10) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            // $insert['product_img_3'] = "$profileImage";

            $data['product_img_3'] = $profileImage;
        }

        if ($files = $request->file('product_img_4')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis') . Str::random(10) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            // $insert['product_img_4'] = "$profileImage";

            $data['product_img_4'] = $profileImage;
        }

        if ($files = $request->file('product_img_5')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis') . Str::random(10) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            // $insert['product_img_5'] = "$profileImage";

            $data['product_img_5'] = $profileImage;
        }




        $data['users_id'] = Auth::id();
        // $data['updated_at'] = null;
        $data['product_active'] = 0;
        $data['product_delete_status'] = 0;
        $data['product_expired_date'] = $request->date;


        Product::create($data);

        return redirect()->back()->with('suc', 'Successfully Added');
    }


    public function show($id)
    {
        $product = Product::find($id);
        $user = User::select('name')->where('id', $product->users_id)->first();

        return view('backend/products/show', compact('product', 'user'));
    }




    //edit existing product---------------------------------------------
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('backend/products/edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // dd($request->all());


        $data = $request->validate([
            'product_name' => 'required|min:5',
            'product_price' => 'required|numeric|min:1|max:10000000000',
            'product_bid_rolls' => 'required|numeric|min:1|max:100000',
            'product_bid_min_value' => 'required|numeric|min:1|max:100000',
            'product_bid_max_value' => 'required|numeric|min:1|max:100000',
            'product_img_1' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'product_img_2' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'product_img_3' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'product_img_4' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'product_img_5' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'product_level' => 'required',
            'product_discription' => 'required|min:5',
            'product_offer' => 'required',
            //  'date'          => 'sometimes|date_format:Y-m-d'
        ]);

        if ($files = $request->file('product_img_1')) {
            $destinationPath = 'storage/images/products/'; // upload path
            $profileImage = date('YmdHis') . Str::random(10) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            // $insert['product_img_1'] = "$profileImage";
            $data['product_img_1'] = $profileImage;
        }

        if ($files = $request->file('product_img_2')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis') . Str::random(10) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            // $insert['product_img_2'] = "$profileImage";

            $data['product_img_2'] = $profileImage;
        }

        if ($files = $request->file('product_img_3')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis') . Str::random(10) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            // $insert['product_img_3'] = "$profileImage";

            $data['product_img_3'] = $profileImage;
        }

        if ($files = $request->file('product_img_4')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis') . Str::random(10) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            // $insert['product_img_4'] = "$profileImage";

            $data['product_img_4'] = $profileImage;
        }

        if ($files = $request->file('product_img_5')) {
            $destinationPath = 'storage/images/products'; // upload path
            $profileImage = date('YmdHis') . Str::random(10) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            // $insert['product_img_5'] = "$profileImage";

            $data['product_img_5'] = $profileImage;
        }


        $data['product_expired_date'] = $request->date;



        $product->update($data);
        return redirect('backend/products')->with('suc', 'Successfully Updated');

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

    public function ajaxImageDelete()
    {
        $product_id = request()->id;
        $image = request()->image;
        $product_image_name = request()->image_name;

        $product = Product::where('id', $product_id)
            ->update([$image => Null]);


        $image_path = public_path('storage/images/products') . '/' . $product_image_name;
        unlink($image_path);




        return response()->json([
            'image' => "Sucessfully removed the image",
        ]);
    }
}
