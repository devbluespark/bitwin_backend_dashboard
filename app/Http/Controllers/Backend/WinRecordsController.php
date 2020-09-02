<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Win_Records;
use Illuminate\Http\Request;
use App\Product;
use App\BidUser;
use DB;

class WinRecordsController extends Controller
{
    //return all win records to front
    public function index()
    {
        try{
            $win_records =DB::table('win_records')
            ->join('bid_users','bid_users.id','=','win_records.bid_user_id')
            ->join('bid_records','bid_records.product_id','=','win_records.product_id')
            ->join('products','products.id','=','win_records.product_id')
            ->select('win_records.id','bid_users.user_fname','bid_records.bid_value','products.product_name')
            ->get();
            return view('backend/win_records/index',compact('win_records'));
        }catch(Exception $e){

            return redirect()->back();

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

    //return selected win record to front
    public function show($id)
    {

        try{
            $win_records=Win_Records::where('id',$id)->first();
            $user_records=BidUser::where('id',$win_records->bid_user_id)->first();
            $product_details=Product::where('id',$win_records->product_id)->first();

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
    

        return view('backend/win_records/show',compact('win_records','user_records','product_details'));
        }catch(Exception $e){

                return redirect()->back();
        }
     
                     

        
    }

    
    public function edit(Win_Records $win_Records)
    {
        //
    }

   
    public function update(Request $request, Win_Records $win_Records)
    {
        //
    }

   
    public function destroy(Win_Records $win_Records)
    {
        //
    }
}
