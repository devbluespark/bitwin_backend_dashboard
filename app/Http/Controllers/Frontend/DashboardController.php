<?php

namespace App\Http\Controllers\Frontend;

use App\Bid_Record;
use App\Bid_Users_Has_Package;
use App\Dashboard;
use App\Free_Roll;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Package;
use App\Parent_User_Has_Roll;
use App\Referral;
use App\Win_Record;
use Illuminate\Support\Facades\Auth;
use DB;


class DashboardController extends Controller
{
    //return to frontend dashboard
    public function index()
    {
        $user_id = Auth::guard('biduser')->user()->id;
       $user_timezone = Auth::guard('biduser')->user()->timezone;

        $latest_products = Product::orderBy('id', 'desc')->where('product_delete_status',0)->take(15)->get();

        foreach($latest_products as $product){

            $product['bid_records_percentage']= $this->status_bar($product);
        }





        // Rolls Calculate (Free, Buy, Bonus)

        // date_default_timezone_set("Africa/Niamey");   //India time (GMT+5:30)
        // echo date('d-m-Y H:i:s');
        // echo "<br>";

        $user_timezone_date= date_default_timezone_set($user_timezone);
        $user_timezone_date= date('Y-m-d');


  
        $free_rolls_last_date = Free_Roll::where('bid_users_id', $user_id)->orderBy('id', 'DESC')->first();
        
        if(isset($free_rolls_last_date)){
              $free_rolls_last_date=$free_rolls_last_date->used_date;
        }else{
            $free_rolls_last_date=0;
        }



       if($user_timezone_date > $free_rolls_last_date){
            $rolls['free'] = 1;
       }else{
            $rolls['free'] = 0;
       }

        $buy_packages = Bid_Users_Has_Package::select('remain_rolls')
            ->where('bid_users_id', $user_id)
            ->where('remain_rolls', '>', 0)
            ->get();

        $sum_buy_rolls = 0;
        foreach ($buy_packages as $buy_package) {
            $sum_buy_rolls = $sum_buy_rolls + $buy_package->remain_rolls;
        }

        $rolls['buy'] = $sum_buy_rolls;



       $bonus_rolls= Parent_User_Has_Roll::select('remain_rolls')
                                            ->where('bid_users_parent_id', $user_id)
                                            ->where('remain_rolls', '>', 0)
                                            ->get();

                                           

        $sum_bonus_rolls = 0;
        foreach ($bonus_rolls as $bonus_roll) {
            $sum_bonus_rolls = $sum_bonus_rolls + $bonus_roll->remain_rolls;
        }

        $rolls['bonus']=$sum_bonus_rolls;


         $rolls['sum'] = $rolls['free'] + $rolls['buy'] + $rolls['bonus'];



         //calcilation win products
         $win_products_count=Win_Record::where('bid_users_id',$user_id)->count();


         //Get All Referels 
         $referels_count = Referral::where('parent_user_id',$user_id)->count();
         

       
         return view('frontend/dashboard/index',compact('latest_products','rolls','win_products_count','referels_count')); ;        


    }


   

    public function status_bar($product){

        try {      
                $how_many_bids= ($product->product_price /( $product->product_bid_rolls * 0.027 )); 
              
              $how_many_bids_int=intval($how_many_bids);
   
               if (($how_many_bids - $how_many_bids_int) > 0) {
                   $how_many_bids_int = $how_many_bids_int + 1 ;
               }
   
            
             $bid_records_count = Bid_Record::where('products_id', $product->id)->count();
       
            $bid_records_percentage =(( $bid_records_count/$how_many_bids_int )*100);
            return $bid_records_percentage;


        }catch (\Exception $e) {
            return $e->getMessage();
        }
        
        
    }


}