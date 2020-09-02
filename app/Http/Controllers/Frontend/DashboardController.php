<?php

namespace App\Http\Controllers\Frontend;

use App\Dashboard;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;


class DashboardController extends Controller
{
    
    public function index()
    {
      
             $dashboard_details=DB::table('bid_users')
                ->join('referrals','referrals.parent_user_id','=','bid_users.id')
                // ->join('win_records','win_records.bid_users_id','=','bid_users.id')
                ->select(DB::raw("count(referrals.parent_user_id) as count_referells"))
                ->where('bid_users.id','=',Auth::guard('biduser')->user()->id)
                ->get();

            //   echo  gettype($dashboard_details);
        return view('frontend/dashboard/index',compact('dashboard_details')) ;        
      
           
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
