<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

use App\Bid_Record;
use App\Product;
use App\Bid_User;
use App\Package;
use DB;
use Illuminate\Http\Request;

class BidRecordsController extends Controller
{
  
    //return all bid records to front
    public function index()
    {

        $bid_records = Bid_Record::all();

        foreach($bid_records as $bid_record){
            $bid_record->customer_name= Bid_User::select('user_fname')->find($bid_record->bid_users_id);
            $bid_record->Product_name= Product::select('product_name')->find($bid_record->products_id);
          
        }
  
         return view('backend/bid_records/index',compact('bid_records'));
    }

   
  

    //return selected bid record to front
    public function show($id)
    {
         $bid_records=Bid_Record::where('id',$id)->first();
         $user_records=Bid_User::select('user_fname','user_lname','user_phn1','user_nic')->find($bid_records->bid_users_id);
         $product_details=Product::select('product_name','product_price','product_img_1')->find($bid_records->products_id);


        return view('backend/bid_records/show',compact('bid_records','user_records','product_details'));
    }

    

}