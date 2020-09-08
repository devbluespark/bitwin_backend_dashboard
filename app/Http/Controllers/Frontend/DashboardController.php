<?php

namespace App\Http\Controllers\Frontend;

use App\Bid_Users_Has_Package;
use App\Dashboard;
use App\Free_Roll;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Package;
use Illuminate\Support\Facades\Auth;
use DB;


class DashboardController extends Controller
{
    //return to frontend dashboard
    public function index()
    {
        $user_id = Auth::guard('biduser')->user()->id;
        $latest_products = Product::orderBy('id', 'desc')->take(15)->get();


        $packages = Bid_Users_Has_Package::select('remain_rolls')
            ->where('bid_users_id', $user_id)
            ->where('remain_rolls', '>', 0)
            ->get();

        $amount = 0;
        foreach ($packages as $package) {
            $amount = $amount + $package->remain_rolls;
        }

        // echo  $free_bid = Free_Roll::select('used_timestamp')
        //     ->where('bid_users_id', $user_id)
        //     ->orderBy('id', 'desc')
        //     ->take(1)
        //     ->get();

        $rolls['buy'] = $amount;


        // date_default_timezone_set("Africa/Niamey");   //India time (GMT+5:30)
        // echo date('d-m-Y H:i:s');
        // echo "<br>";




        //    /  $dashboard_details=DB::table('bid_users')
        //         ->join('referrals','referrals.parent_user_id','=','bid_users.id')
        //         // ->join('win_records','win_records.bid_users_id','=','bid_users.id')
        //         ->select(DB::raw("count(referrals.parent_user_id) as count_referells"))
        //         ->where('bid_users.id','=',Auth::guard('biduser')->user()->id)
        //         ->get(); 

        //   echo  gettype($dashboard_details);
         return view('frontend/dashboard/index',compact('dashboard_details','latest_products')) ;        


    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Dashboard $dashboard)
    {
        //
    }


    public function edit(Dashboard $dashboard)
    {
        //
    }


    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }


    public function destroy(Dashboard $dashboard)
    {
        //
    }
}