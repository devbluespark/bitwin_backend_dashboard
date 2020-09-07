<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Win_Record;
use Illuminate\Http\Request;
use App\Product;
use App\Bid_User;
use DB;

class WinRecordsController extends Controller
{

    public function index()
    {
        try{
            // $win_records =DB::table('win_records')
            // ->join('bid_users','bid_users.id','=','win_records.bid_user_id')
            // ->join('bid_records','bid_records.product_id','=','win_records.product_id')
            // ->join('products','products.id','=','win_records.product_id')
            // ->select('win_records.id','bid_users.user_fname','bid_records.bid_value','products.product_name')
            // ->get();

             $win_records=Win_Record::all();


             foreach($win_records as $win_record){
                $win_record->customer_details= Bid_User::select('user_fname')->find($win_record->bid_users_id);
                $win_record->product_details= Product::select('product_name')->find($win_record->products_id);
              
            }

            return view('backend/win_records/index',compact('win_records'));
        }catch (\Exception $e) {
            return $e->getMessage();
        }
        
    }

    
    
    public function show($id)
    {
        try{
        $win_records=Win_Record::where('id',$id)->first();
        $user_records=Bid_User::select('user_fname','user_lname','user_phn1','user_nic')->find($win_records->bid_users_id);
        $product_details=Product::select('product_name','product_price','product_img_1')->find($win_records->products_id);

        

        return view('backend/win_records/show',compact('win_records','user_records','product_details'));
        
        }catch (\Exception $e) {
            return $e->getMessage();
        }
     
                     

        
    }


}