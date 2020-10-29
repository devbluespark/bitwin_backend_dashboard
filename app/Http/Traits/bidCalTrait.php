<?php

namespace App\Http\Traits;
use App\Bid_Record;
use App\Bid_Users_Has_Package;
use App\Free_Roll;
use App\Parent_User_Has_Roll;
use App\Win_Record;
use App\Product;
use App\Roll_Price;
use Illuminate\Support\Facades\Auth;

trait bidCalTrait {

    public function status_bar($product)
    {
        //only use product price,product bid rolls,product_id

        try {

            $roll_price = Roll_Price::find(1);

            $how_many_bids = ($product->product_price / ($product->product_bid_rolls * ($roll_price->roll_price)));

            $how_many_bids_int = intval($how_many_bids);

            if (($how_many_bids - $how_many_bids_int) > 0) {
                $how_many_bids_int = $how_many_bids_int + 1;
            }


            $bid_records_count = Bid_Record::where('products_id', $product->id)->count();

            $bid_records_percentage = (($bid_records_count / $how_many_bids_int) * 100);
            return intval($bid_records_percentage);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function findWinner($product_id){


        $bid_record=Bid_Record::select('bid_value')->where('products_id',$product_id)->orderBy('bid_value', 'asc')->get();

        foreach($bid_record as $bid_record){
            $bid_values_array[]= $bid_record->bid_value;
        }

        $bid_values_counts = array_count_values($bid_values_array);


        foreach($bid_values_counts as $bid_valus_count){

            if($bid_valus_count === 1){
              $win_bid_value = array_search($bid_valus_count, $bid_values_counts);
              $win_user_id = Bid_Record::select('bid_users_id')->where('products_id',$product_id)->where('bid_value',$win_bid_value)->get();
              break;
            }
        }

        if(isset($win_user_id)){

            foreach($win_user_id as $win_user_id){
                $win_user_id=$win_user_id->bid_users_id;
            }

            //save win Record
            $add_win_record = new Win_Record;
            $add_win_record->bid_value = $win_bid_value;
            $add_win_record->products_id = $product_id;
            $add_win_record->bid_users_id = $win_user_id;
            $add_win_record->save();


            return true;
        }else{
            return false;
        }


    }








    public function getUserRolls()
    {


        // Rolls Calculate (Free, Buy, Bonus)

        // date_default_timezone_set("Africa/Niamey");   //India time (GMT+5:30)
        // echo date('d-m-Y H:i:s');
        // echo "<br>";
        $user_id = Auth::guard('biduser')->user()->id;
        $user_timezone = Auth::guard('biduser')->user()->timezone;

        $user_timezone_date = date_default_timezone_set($user_timezone);
        $user_timezone_date = date('Y-m-d');



        $free_rolls_last_date = Free_Roll::where('bid_users_id', $user_id)->orderBy('id', 'DESC')->first();

        if (isset($free_rolls_last_date)) {
            $free_rolls_last_date = $free_rolls_last_date->used_date;
        } else {
            $free_rolls_last_date = 0;
        }



        if ($user_timezone_date > $free_rolls_last_date) {
            $rolls['free'] = 1;
        } else {
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



        $bonus_rolls = Parent_User_Has_Roll::select('remain_rolls')
            ->where('bid_users_parent_id', $user_id)
            ->where('remain_rolls', '>', 0)
            ->get();



        $sum_bonus_rolls = 0;
        foreach ($bonus_rolls as $bonus_roll) {
            $sum_bonus_rolls = $sum_bonus_rolls + $bonus_roll->remain_rolls;
        }

        $rolls['bonus'] = $sum_bonus_rolls;


        $rolls['sum'] = $rolls['free'] + $rolls['buy'] + $rolls['bonus'];

        return $rolls;
    }












}
