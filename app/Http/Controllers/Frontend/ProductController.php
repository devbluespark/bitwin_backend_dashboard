<?php


use Illuminate\Http\Request;


namespace App\Http\Controllers\Frontend;

use App\Bid_Record;
use App\Bid_Users_Has_Package;
use App\Free_Roll;
use App\Http\Controllers\Controller;
use App\Parent_User_Has_Roll;
use App\Product;
use App\Bid_Rolls_Record;
use App\Buy_Rolls_Record;
use App\Referral_Rolls_Record;
use App\Bid_User;
use App\Events\BidEvent;
use App\Win_Record;

use App\Http\Traits\bidCalTrait;

use App\Events\TestEvent;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ProductController extends Controller
{


    use bidCalTrait;

    //return all active products in frontend
    public function index()
    {

        try {

            //   Offers Products Auto Matic Choose a winne --//

            $offers_products = Product::where('product_active', 1)
                                    ->where('product_delete_status', 0)
                                    ->where('product_expired', 0)
                                    ->where('product_offer',1)
                                    ->get();




            foreach($offers_products as $offers_product){
                if($offers_product['product_expired_date'] > 0){

                    $expired_date = $offers_product['product_expired_date'];
                    $now_date_timestamp = time();

                    if($now_date_timestamp >= $expired_date){
                        $has_winner = $this->findWinner($offers_product['id']);

                        if($has_winner == true){

                            Product::where('id', $offers_product['id'])
                            ->update([
                                'product_active' => 0,
                                'product_expired' => 1,
                                'product_expired_auto' => 1
                                ]);
                        }
                    }

                }

            }


            // end FInd Offers product winner //

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




    public function user_bid(Request $request){

        $product_id =  (int)$request->product_id;
        $product_level = $request->product_level;
        $product_rolls = (int)$request->product_bid_rolls;

        $bid_input = (int)$request->bid_input;

        $user_buy_rolls=(int)$request->user_buy_rolls;
        $user_bonus_rolls=(int)$request->user_bonus_rolls;

        if($request->has('select_free_bid')){
            $select_free_bid= true;
        }else{
            $select_free_bid= false;
        }


        $bid_record = new Bid_Record;
        $bid_record->bid_value =$bid_input;
        $bid_record->products_id = $product_id;
        $bid_record->bid_users_id = Auth::guard('biduser')->user()->id;
        $bid_record->save();


        $last_bid_record_id = $bid_record->id;


        if($product_level === "free"){

            if($select_free_bid == true){
                $save_free_roll=1;
                $save_buy_rolls=0;
                $save_bonus_rolls =0;
            }elseif ($select_free_bid == false) {

                $save_free_roll = 0;

                if($user_buy_rolls >= 1){
                    $save_buy_rolls = 1;
                    $save_bonus_rolls =0;
                }else{
                    $save_buy_rolls =0;
                    $save_bonus_rolls = 1;
                }
            }

        }elseif($product_level === "intermediate"){

            if($select_free_bid == true){

                $save_free_roll=1;

                if(($product_rolls-1) <= $user_buy_rolls){
                   $save_buy_rolls= ($product_rolls-1);
                   $save_bonus_rolls = 0;


                }elseif(($product_rolls-1) > $user_buy_rolls){
                  $save_buy_rolls= $user_buy_rolls;
                  $save_bonus_rolls = ($product_rolls-1) - $user_buy_rolls;
                }


            }elseif($select_free_bid == false){
                $save_free_roll=0;

                if(($product_rolls) <= $user_buy_rolls){
                    $save_buy_rolls= ($product_rolls);
                    $save_bonus_rolls = 0;

                 }elseif(($product_rolls) > $user_buy_rolls){
                   $save_buy_rolls= $user_buy_rolls;
                   $save_bonus_rolls = ($product_rolls) - $user_buy_rolls;
                 }

            }

        }elseif ($product_level === "high") {


            $save_free_roll=0;

                if(($product_rolls) <= $user_buy_rolls){
                    $save_buy_rolls= ($product_rolls);
                    $save_bonus_rolls = 0;

                 }elseif(($product_rolls) > $user_buy_rolls){
                   $save_buy_rolls= $user_buy_rolls;
                   $save_bonus_rolls = ($product_rolls) - $user_buy_rolls;
                 }

        }


        $bid_rolls_record=new Bid_Rolls_Record;
        $bid_rolls_record->free = $save_free_roll;
        $bid_rolls_record->buy = $save_buy_rolls;
        $bid_rolls_record->bonus = $save_bonus_rolls;
        $bid_rolls_record->bid_records_id = $last_bid_record_id;
        $bid_rolls_record->save();


        if($save_free_roll === 1){
            $user_timezone = Auth::guard('biduser')->user()->timezone;

            $user_timezone_date = date_default_timezone_set($user_timezone);
            $user_timezone_date = date('Y-m-d');

            $free_roll_details = new Free_Roll;
            $free_roll_details->used_date = $user_timezone_date;
            $free_roll_details->bid_users_id = Auth::guard('biduser')->user()->id;
            $free_roll_details->save();


        }





        if($save_buy_rolls > 0){

            $remain_buy_rolls = Bid_Users_Has_Package::select('id', 'remain_rolls')->where('bid_users_id', Auth::guard('biduser')->user()->id)->where('remain_rolls','>', 0)->get();

            $save_remain_buy_rolls_sum=0;
            foreach($remain_buy_rolls as $remain_buy_roll){

                if(($remain_buy_roll->remain_rolls) >= ($save_buy_rolls - $save_remain_buy_rolls_sum)){
                    $save_remain_buy_rolls = ($remain_buy_roll->remain_rolls) - ($save_buy_rolls - $save_remain_buy_rolls_sum);
                    Bid_Users_Has_Package::where('id',$remain_buy_roll->id)
                                            ->update(['remain_rolls' => $save_remain_buy_rolls]);


                    //save this record also on buy rolls record
                    $buy_rolls_records=new Buy_Rolls_Record;
                    $buy_rolls_records->rolls = ($save_buy_rolls - $save_remain_buy_rolls_sum);
                    $buy_rolls_records->bid_users_has_packages_id = $remain_buy_roll->id;
                    $buy_rolls_records->bid_records_id = $last_bid_record_id;
                    $buy_rolls_records->save();


                     break;

                }elseif(($remain_buy_roll->remain_rolls) < ($save_buy_rolls - $save_remain_buy_rolls_sum)){

                    $save_remain_buy_rolls_sum = $save_remain_buy_rolls_sum + ($remain_buy_roll->remain_rolls);

                    $save_remain_buy_rolls = 0;
                    Bid_Users_Has_Package::where('id',$remain_buy_roll->id)
                                            ->update(['remain_rolls' => $save_remain_buy_rolls]);


                    //save this record also on buy rolls record
                    $buy_rolls_records=new Buy_Rolls_Record;
                    $buy_rolls_records->rolls = $remain_buy_roll->remain_rolls;
                    $buy_rolls_records->bid_users_has_packages_id = $remain_buy_roll->id;
                    $buy_rolls_records->bid_records_id = $last_bid_record_id;
                    $buy_rolls_records->save();

                }
            }
        }



        if($save_bonus_rolls > 0){


            $remain_bonus_rolls = Parent_User_Has_Roll::select('id', 'remain_rolls')->where('bid_users_id', Auth::guard('biduser')->user()->id)->where('remain_rolls','>', 0)->get();

            $save_remain_bonus_rolls_sum=0;
            foreach($remain_bonus_rolls as $remain_bonus_roll){

                if(($remain_bonus_roll->remain_rolls) >= ($save_bonus_rolls - $save_remain_bonus_rolls_sum)){
                    $save_remain_bonus_rolls = ($remain_bonus_roll->remain_rolls) - ($save_bonus_rolls - $save_remain_bonus_rolls_sum);
                    Parent_User_Has_Roll::where('id',$remain_bonus_roll->id)
                                            ->update(['remain_rolls' => $save_remain_bonus_rolls]);


                    //save this record also on buy rolls record
                    $bonus_rolls_records=new Referral_Rolls_Record;
                    $bonus_rolls_records->rolls = ($save_bonus_rolls - $save_remain_bonus_rolls_sum);
                    $bonus_rolls_records->parent_user_has_rolls_id = $remain_bonus_roll->id;
                    $bonus_rolls_records->bid_records_id = $last_bid_record_id;
                    $bonus_rolls_records->save();


                    exit;

                }elseif(($remain_bonus_roll->remain_rolls) < ($save_bonus_rolls - $save_remain_bonus_rolls_sum)){

                    $save_remain_bonus_rolls_sum = $save_remain_bonus_rolls_sum + ($remain_bonus_roll->remain_rolls);

                    $save_remain_bonus_rolls = 0;
                    Parent_User_Has_Roll::where('id',$remain_bonus_roll->id)
                                            ->update(['remain_rolls' => $save_remain_bonus_rolls]);


                    //save this record also on buy rolls record
                    $bonus_rolls_records=new Referral_Rolls_Record;
                    $bonus_rolls_records->rolls = $remain_bonus_roll->remain_rolls;
                    $bonus_rolls_records->parent_user_has_rolls_id = $remain_bonus_roll->id;
                    $bonus_rolls_records->bid_records_id = $last_bid_record_id;
                    $bonus_rolls_records->save();

                }
            }
        }


            $message = "Bid a product";
            $user_to_event = Bid_User::find(Auth::guard('biduser')->user()->id);
            $product_to_event = Product::find($product_id);

            $bid_item['product_name'] = $product_to_event['product_name'];
            $bid_item['product_img_1'] = $product_to_event['product_img_1'];
            $bid_item['product_level'] = $product_to_event['product_level'];
            $bid_item['user_fname'] = $user_to_event['user_fname'];

            // dd($product_to_event);
            //call event with pusher
            event(new BidEvent($bid_item));

            //get prouct for check percentage status
            $product_status_bar= Product::find($product_id);

            $product_percentage_value = $this->status_bar($product_status_bar);

            if($product_percentage_value >= 100){



                $has_winner = $this->findWinner($product_id);

                if($has_winner == true){

                    //update product as Expired with expirad state auto


                    Product::where('id', $product_id)
                    ->update([
                        'product_expired' => 1,
                        'product_expired_date' => now(),
                        'product_expired_auto' => 1,
                    ]);

                }else{
                    return redirect()->route('findwinner.index');
                }

            }

            return redirect()->route('user.products.index');


    }




}
