<?php

namespace App\Http\Controllers\Frontend;

use App\Bid_Record;
use App\Bid_User;
use App\Bid_Users_Has_Package;
use App\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Package;
use App\Parent_User_Has_Roll;
use App\Product;
use App\Win_Record;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
   //return to history view on frontend dashboard
    public function index()
    {

       $logged_user_id =Auth::guard('biduser')->user()->id;
       $all_bid_records = Bid_Record::where('bid_users_id', $logged_user_id)->paginate(5);

       foreach ($all_bid_records as $all_bid_record) {
               $product_details= Product::find($all_bid_record->products_id);
               $all_bid_record['product_name'] =  $product_details['product_name'];
       }

       // get win details
       $win_details =Win_Record::where('bid_users_id',$logged_user_id)->get();
       foreach($win_details as $win_detail){
             $product_details= Product::find($win_detail->products_id);
             $win_detail['product_name'] = $product_details['product_name'];
       }

       //packages that buy
       $packages_buy = Bid_Users_Has_Package::where('bid_users_id',$logged_user_id)->get();
       foreach($packages_buy as $package_buy){
            $package_details= Package::find($package_buy->packages_id);
             $package_buy['package_name'] = $package_details['package_name'];
             $package_buy['package_rolls'] = $package_details['package_rolls'];
       }

       //bonus rolls
       $bonus_rolls = Parent_User_Has_Roll::where('bid_users_parent_id',$logged_user_id)->get();
       foreach($bonus_rolls as $bonus_roll){
            $child_details = Bid_User::find($bonus_roll->bid_users_id);
            $bonus_roll['child_user_name'] = $child_details['user_fname'];
       }


       return view('frontend/history/index',compact('all_bid_records','win_details','packages_buy','bonus_rolls')) ;

    }


    public function product_details($product_id){
        $product_details = Product::find($product_id);
        $bid_records = Bid_Record::where('products_id',$product_id)->get();
        $win_details = Win_Record::where('products_id',$product_id)->first();
        return view('frontend/history/showProduct',compact('product_details','bid_records','win_details')) ;
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(History $history)
    {
        //
    }


    public function edit(History $history)
    {
        //
    }


    public function update(Request $request, History $history)
    {
        //
    }


    public function destroy(History $history)
    {
        //
    }
}
