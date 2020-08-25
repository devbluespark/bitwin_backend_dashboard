<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payments_Reciept;
use App\Receipt;

class PaymentbankController extends Controller
{
  
    public function index()
    {
        try {
             $payments_not_confirmed = Payments_Reciept::where('payment_receipt_confirm', 0)->get();
            $payments_confirmed = Payments_Reciept::where('payment_receipt_confirm', 1)->get();
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
            
            
            $payment_receipt = Payments_Reciept::find($payment_id);
            $receipt= Receipt::find($payment_receipt->receipts_id);
            return view('backend.payment-receipt.show',compact('payment_receipt','receipt'));
            
     
           
       } catch (\Exception $e) {
           return $e->getMessage();
       }
    }


    public function payment_confirmed(Request $request){
        try {
            
            $payment_id= $request->id;
            $confirmed_payment=Payments_Reciept::find($payment_id);

            $confirmed_payment->payment_receipt_confirm = 1;
            $confirmed_payment->save();
            return redirect('backend/payments-reciepts');
    
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }






}