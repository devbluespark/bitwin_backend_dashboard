<?php

namespace App\Http\Controllers\Backend;

use App\BidDetail;
use App\BidUser;
use App\Win_Detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package;
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
            $bid_records = BidDetail::where('bid_user_id',$id)->get();         
            $bid_user = BidUser::where('id',$id)->first();     
            $win_details=Win_Detail::where('bid_user_id',$id)->get();  
            $packages= Package::where('users_id',$id)->get(); 
          
            return view('backend/biddetails/show',compact('bid_records','bid_user','win_details','packages'));
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
