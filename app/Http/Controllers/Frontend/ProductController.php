<?php


use Illuminate\Http\Request;


namespace App\Http\Controllers\Frontend;

use App\Bid_Record;
use App\Bid_Users_Has_Package;
use App\Free_Roll;
use App\Http\Controllers\Controller;
use App\Parent_User_Has_Roll;
use App\Product;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    //return all active products in frontend
    public function index()
    {

        try {

            $products = Product::where('product_active', 1)
                ->where('product_delete_status', 0)
                ->where('product_expired', 0)
                ->get();

            foreach ($products as $product) {

                $product['bid_records_percentage'] = $this->status_bar($product);
            }


            $rolls = $this->getUserRolls();


            return view('frontend/bid_item/index', compact('products', 'rolls'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    //view a product details
    public function show($id)
    {
        try {
            $product = Product::where('id', $id)
                ->first();
            return view('frontend/product/show', compact('product'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function status_bar($product)
    {

        try {
            $how_many_bids = ($product->product_price / ($product->product_bid_rolls * 0.027));

            $how_many_bids_int = intval($how_many_bids);

            if (($how_many_bids - $how_many_bids_int) > 0) {
                $how_many_bids_int = $how_many_bids_int + 1;
            }


            $bid_records_count = Bid_Record::where('products_id', $product->id)->count();

            $bid_records_percentage = (($bid_records_count / $how_many_bids_int) * 100);
            return $bid_records_percentage;
        } catch (\Exception $e) {
            return $e->getMessage();
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

    public function ajaxUsersRolls()
    {
        $product_id = request()->id;
        // $product_id=5;
        $user_can_bid = 0;
        $errors = "";
        $success = "";

        $product = Product::where('id', $product_id)->first();
        $product['state_bar'] = $this->status_bar($product);

        $rolls = $this->getUserRolls();

        $product_rolls = $product->product_bid_rolls;
        $user_free_rolls = $rolls['free'];
        $user_buy_rolls = $rolls['buy'];
        $user_bonus_rolls = $rolls['bonus'];
        $sum_bonus_buy_rolls = $user_buy_rolls + $user_bonus_rolls;



        // --------------------------------------------
            // new requremnt with

        $product_level =$product->product_level;

        if ($product_level === "free"){


            if( ($user_free_rolls + $user_buy_rolls + $user_bonus_rolls) > 0){

                $errors = "";
                $user_can_bid = 1;

                if($user_free_rolls === 1){
                    $success = "you can bid using today free bit or Buy ,bonus Rolls";
                }elseif($user_free_rolls === 0){
                    $success = "you can only pay using Buy ,bonus Rolls";
                }

            }elseif(($user_free_rolls + $user_buy_rolls + $user_bonus_rolls) == 0){
                $errors = "you dont have free roll and any buy ,bonus";
                $user_can_bid = 0;
                $success ="";
            }


        }elseif($product_level === "intermediate"){
            // Intermediate


            if(($user_free_rolls + $user_buy_rolls + $user_bonus_rolls) >= $product_rolls){

                $user_can_bid = 1;
                $success ="you can bid using free roll and buy,bonus rollssss(intermediate)";

            }elseif(($user_free_rolls + $user_buy_rolls + $user_bonus_rolls) < $product_rolls){

                $errors = "You dont have enought rolls to bid this product..(inrtemediate)";
                $user_can_bid = 0;

            }


        }elseif($product_level === "high"){


            if(($user_buy_rolls + $user_bonus_rolls) >= $product_rolls){
                $user_can_bid = 1;
                $success ="you can bid using buy and bonus rolls(high)";
            }elseif(($user_buy_rolls + $user_bonus_rolls) < $product_rolls){
                $errors = "You dont have enought rolls to bid this product..(high)";
                $user_can_bid = 0;
            }




        }




        // -------------------------------------------------


        // if ($product_rolls === 1) {

        //     if ($user_free_rolls === 1) {
        //         $user_can_bid = 1;
        //         $success = "you can bid using today free bit";
        //         $errors = "";
        //     } else {

        //         if ($sum_bonus_buy_rolls > 0) {
        //             $user_can_bid = 1;
        //             $success = "you can bid using Buy or Bonus Rolls";
        //         } else {
        //             $user_can_bid = 0;
        //             $errors = "you dont have even 1 roll";
        //         }
        //     }
        // }



        // if ($product_rolls > 1) {

        //     if ($sum_bonus_buy_rolls >= $product_rolls) {
        //         $user_can_bid = 1;
        //         $success = "you can bid using Buy or Bonus Rolls";
        //     } else {
        //         $user_can_bid = 0;
        //         // $errors = "you dont have enought buy and bonus rolls ";
        //         $errors = "you can't bid (haven't enought rolls)";
        //     }
        // }


        return response()->json([
            'product' => $product,
            'product rolls' => $product_rolls,
            'free_rolls' => $user_free_rolls,
            'buy_rolls' => $user_buy_rolls,
            'bonus_rolls' => $user_bonus_rolls,
            'can' => $user_can_bid,
            'error' => $errors,
            'success' => $success,
            // 'data'=>$data
        ]);
    }
}
