<?php

namespace App\Http\Controllers\Backend;

use App\BidDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BidDetailController extends Controller
{
   
    public function index()
    {
        //
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
        try{
            $bid_records = DB::table('bid_records')
            ->where('id',$id)
            // ->join('bid_users', 'bid_users.id', '=', 'bid_records.bid_user_id')
            // ->join('products', 'products.id', '=', 'bid_records.product_id')
            // ->select('bid_users.*', 'bid_records.*', 'products.*')
            ->first();
            return $bid_records;
            // return view('backend/biddetails/show',compact('bid_records'));
        }catch(Exception $e){
            return redirect('backend/customers');
        }
    }

    
    
    public function edit(BidDetail $bidDetail)
    {
        //
    }

    
    public function update(Request $request, BidDetail $bidDetail)
    {
        //
    }

    public function destroy(BidDetail $bidDetail)
    {
        //
    }
}
