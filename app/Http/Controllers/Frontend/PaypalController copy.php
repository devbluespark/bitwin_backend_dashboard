<?php

namespace App\Http\Controllers\Frontend;

use App\Bid_Users_Has_Package;
use App\Http\Controllers\Controller;
use App\Package;
use App\Parent_User_Has_Roll;
use App\Payments_Gateway;
use App\Receipt;
use App\Referral;
use App\Referral_Package_Roll;
use App\Win_Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use function Symfony\Component\VarDumper\Dumper\esc;

class PaypalController extends Controller
{
    public function nofiry_url(){

        $merchant_id         = $_POST['merchant_id'];
       $order_id             = $_POST['order_id'];
       $payhere_amount     = $_POST['payhere_amount'];
       $payhere_currency    = $_POST['payhere_currency'];
       $status_code         = $_POST['status_code'];
       $md5sig                = $_POST['md5sig'];

       $merchant_secret = '8QlExkQtTX88W2RKajVBD68MSMuOc7vHB8MPmnlmLeOw'; // Replace with your Merchant Secret (Can be found on your PayHere account's Settings page)

       $local_md5sig = strtoupper (md5 ( $merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret)) ) );

       if (($local_md5sig === $md5sig) AND ($status_code == 2) ){


   $user_id = Auth::guard('biduser')->user()->id;


   $last_receipt_id = Receipt::orderBy('id', 'DESC')->first();


   if($last_receipt_id == NUll){
       $last_receipt_id = 0;
   }else{
        $last_receipt_id = $last_receipt_id->id;
   }

   $new_receipt_id = $last_receipt_id + 1;

   $lenth_new_receipt_id=  strlen($new_receipt_id);
   $need_zeros = (8 - $lenth_new_receipt_id) ;

   $var= "";

   for($i=0; $i< $need_zeros; $i++ ){
     $var =$var."0";
   }

   $receipt_code = $var.$new_receipt_id;


   $save_receipt = new Receipt;
   $save_receipt->receipt_code = $receipt_code;
   $save_receipt->save();

   $saved_receipt_id = $save_receipt->id;

   //save Payment Gateway table
   $payment_gateway = new Payments_Gateway;

   $payment_gateway->payment_amount = $payhere_amount;
   $payment_gateway->payment_method = "payhere";
   $payment_gateway->bid_users_id  = $user_id;
   $payment_gateway->receipts_id  = $saved_receipt_id;
   $payment_gateway->packages_id  = $order_id;
   $payment_gateway->currency = $payhere_currency;
   $payment_gateway->created_at =  Carbon::now()->toDateTimeString();
   $payment_gateway->save();



   //save bid users has packages table

  $package_rolls = Package::select('package_rolls')->where('id',$order_id)->first();
  $package_rolls = $package_rolls['package_rolls'];

   $bid_user_has_package = new Bid_Users_Has_Package;

   $bid_user_has_package->bid_users_id  = $user_id;
   $bid_user_has_package->packages_id   = $order_id;
   $bid_user_has_package->created_at  = Carbon::now()->toDateTimeString();
   $bid_user_has_package->rolls  = $package_rolls;
   $bid_user_has_package->remain_rolls  = $package_rolls;
   $bid_user_has_package->save();


   //check is there parent user, if has update parent user bonus rolls
   $parent_user_id = Referral::where('bid_users_id',$user_id)->first();
   $parent_user_id = $parent_user_id['parent_user_id'];


   if( $parent_user_id != 0 ){

       $bonus_rolls_for_parent = Referral_Package_Roll::where('packages_id',$order_id)->first();
       $bonus_rolls_for_parent = $bonus_rolls_for_parent['rolls_amount'];

       $save_parent_user_has_rolls = new Parent_User_Has_Roll;
       $save_parent_user_has_rolls->rolls = $bonus_rolls_for_parent;
       $save_parent_user_has_rolls->remain_rolls = $bonus_rolls_for_parent;
       $save_parent_user_has_rolls->packages_id = $order_id;
       $save_parent_user_has_rolls->bid_users_id = $user_id;
       $save_parent_user_has_rolls->bid_users_parent_id = $parent_user_id;
       $save_parent_user_has_rolls->created_at = Carbon::now()->toDateTimeString();
       $save_parent_user_has_rolls->save();

   }






       }


}



    public function cancel_url(){
        echo "cances url";
    }

    public function return_url(){

        echo $last_receipt_id = Receipt::latest()->first();

        if($last_receipt_id == NUll){
            echo "empty";
        }else{
            echo "not empty";
        }

        $order_id = 1;
        $package_id = $order_id;


        $id = 5;
        $id2 = 51;
        $id3 = 25;

        $lenth_invoice_number=  strlen($id3);
        $need_zoros = 8 - $lenth_invoice_number ;

        $var= "";

        for($i=0; $i< $need_zoros; $i++ ){
          $var =$var."0";
        }



        echo $var.$id3;
    }

    public function check(){


        $payhere_amount     = 1000;
        $order_id = 15;
        $payhere_currency    = "lkr";
        $user_id = Auth::guard('biduser')->user()->id;

         $last_receipt_id = Receipt::orderBy('id', 'DESC')->first();


        if($last_receipt_id == NUll){
            $last_receipt_id = 0;
        }else{
             $last_receipt_id = $last_receipt_id->id;
        }

        $new_receipt_id = $last_receipt_id + 1;

        $lenth_new_receipt_id=  strlen($new_receipt_id);
        $need_zeros = (8 - $lenth_new_receipt_id) ;

        $var= "";

        for($i=0; $i< $need_zeros; $i++ ){
          $var =$var."0";
        }

        $receipt_code = $var.$new_receipt_id;


        $save_receipt = new Receipt;
        $save_receipt->receipt_code = $receipt_code;
        $save_receipt->save();

        $saved_receipt_id = $save_receipt->id;

        //save Payment Gateway table
        $payment_gateway = new Payments_Gateway;

        $payment_gateway->payment_amount = $payhere_amount;
        $payment_gateway->payment_method = "payhere";
        $payment_gateway->bid_users_id  = $user_id;
        $payment_gateway->receipts_id  = $saved_receipt_id;
        $payment_gateway->packages_id  = $order_id;
        $payment_gateway->currency = $payhere_currency;
        $payment_gateway->created_at =  Carbon::now()->toDateTimeString();
        $payment_gateway->save();



        //save bid users has packages table

       $package_rolls = Package::select('package_rolls')->where('id',$order_id)->first();
       $package_rolls = $package_rolls['package_rolls'];

        $bid_user_has_package = new Bid_Users_Has_Package;

        $bid_user_has_package->bid_users_id  = $user_id;
        $bid_user_has_package->packages_id   = $order_id;
        $bid_user_has_package->created_at  = Carbon::now()->toDateTimeString();
        $bid_user_has_package->rolls  = $package_rolls;
        $bid_user_has_package->remain_rolls  = $package_rolls;
        $bid_user_has_package->save();


        //check is there parent user, if has update parent user bonus rolls
        $parent_user_id = Referral::where('bid_users_id',$user_id)->first();
        $parent_user_id = $parent_user_id['parent_user_id'];


        if( $parent_user_id != 0 ){

            $bonus_rolls_for_parent = Referral_Package_Roll::where('packages_id',$order_id)->first();
            $bonus_rolls_for_parent = $bonus_rolls_for_parent['rolls_amount'];

            $save_parent_user_has_rolls = new Parent_User_Has_Roll;
            $save_parent_user_has_rolls->rolls = $bonus_rolls_for_parent;
            $save_parent_user_has_rolls->remain_rolls = $bonus_rolls_for_parent;
            $save_parent_user_has_rolls->packages_id = $order_id;
            $save_parent_user_has_rolls->bid_users_id = $user_id;
            $save_parent_user_has_rolls->bid_users_parent_id = $parent_user_id;
            $save_parent_user_has_rolls->created_at = Carbon::now()->toDateTimeString();
            $save_parent_user_has_rolls->save();

        }


    }




}
