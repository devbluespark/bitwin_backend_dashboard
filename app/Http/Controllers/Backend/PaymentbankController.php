<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payments_Receipt;
use App\Receipt;
use App\Users_has_Package;
use Carbon\Carbon;

class PaymentbankController extends Controller
{
  
    public function index()
    {
        try {
             $payments_not_confirmed = Payments_Receipt::where('payment_receipt_confirm', 0)->get();
            $payments_confirmed = Payments_Receipt::where('payment_receipt_confirm', 1)->get();
          
             return view('backend.payment-receipt.index', compact('payments_not_confirmed','payments_confirmed'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($payment_id)
    {
        try {
            
            $payment_receipt = Payments_Receipt::find($payment_id);
            $receipt= Receipt::find($payment_receipt->receipts_id);
            return view('backend.payment-receipt.show',compact('payment_receipt','receipt'));
            
     
           
       } catch (\Exception $e) {
           return $e->getMessage();
       }
    }


    public function payment_confirmed(Request $request){
        try {
            
            
            $payment_id= $request->id;
            $confirmed_payment=Payments_Receipt::find($payment_id);

            $data['package_remain_rolls'] = $confirmed_payment->package->package_rolls;
            $data['bid_user_id'] = $confirmed_payment->bid_user_id;
            $data['package_id'] = $confirmed_payment->package_id;
            $data['created_at'] = Carbon::now()->toDateTimeString();
           
            Users_has_Package::create($data);

            $confirmed_payment->payment_receipt_confirm = 1;
            $confirmed_payment->save();
            return redirect('backend/payments-receipts');
    
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }






}