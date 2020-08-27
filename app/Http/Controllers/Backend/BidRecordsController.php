<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

use App\Bid_Records;
use App\Product;
use App\BidUser;

use DB;
use Illuminate\Http\Request;

class BidRecordsController extends Controller
{
  
    public function index()
    {
        $bid_records =DB::table('bid_records')
                    ->join('bid_users','bid_users.id','=','bid_records.bid_user_id')
                    ->join('win_records','bid_records.bid_user_id','=','bid_records.bid_user_id')
                    ->join('products','products.id','=','bid_records.product_id')
                    ->select('bid_records.id','bid_users.user_fname','bid_records.bid_value','products.product_name')                   
                    ->get();
        return view('backend/bid_records/index',compact('bid_records'));
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
       $bid_records=Bid_Records::where('id',$id)->first();
       $user_records=BidUser::where('id',$bid_records->bid_user_id)->first();
       $product_details=Product::where('id',$bid_records->product_id)->first();
    //    $details=Db::table('bid_records')
    //                 ->join('bid_users','bid_users.id','=','1')
    //                 ->join('products','products.id','=','1')
    //                 ->select('bid_users.user_fname',
    //                 'bid_users.user_email','bid_users.user_nic',
    //                 'bid_users.user_own_coins','bid_users.user_phn1',
    //                 'bid_records.bid_value','products.product_name',
    //                 'products.product_name','products.product_price',
    //                 'products.product_img_1')                    
    //                 ->get();

    //     return $bid_records;
// 
                     

        return view('backend/bid_records/show',compact('bid_records','user_records','product_details'));
    }

    
    public function edit(Bid_Records $bid_Records)
    {
        //
    }

   
    public function update(Request $request, Bid_Records $bid_Records)
    {
        //
    }

   
    public function destroy(Bid_Records $bid_Records)
    {
        //
    }
}
