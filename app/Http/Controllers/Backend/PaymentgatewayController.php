<?php

namespace App\Http\Controllers\Backend;

use App\Bid_User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Package;
use App\Payments_Gateway;
use App\Receipt;

class PaymentgatewayController extends Controller
{

    public function index(){
        try {
            $payments = Payments_Gateway::all();

            return view('backend.payment-gateway.index', compact('payments'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }





    public function show($payment_id){


        try {

             $payment_gateway = Payments_Gateway::find($payment_id);
             $receipt= Receipt::find($payment_gateway->receipts_id);
             $bid_user =Bid_User::select('id','user_fname')->find($payment_gateway->bid_users_id);
             $packages=Package::select('package_name','package_price')->find($payment_gateway->packages_id);

            return view('backend.payment-gateway.show',compact('payment_gateway','receipt','bid_user','packages'));



        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


}
