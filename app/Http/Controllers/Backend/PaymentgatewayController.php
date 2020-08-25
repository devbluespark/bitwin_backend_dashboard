<?php

namespace App\Http\Controllers\Backend;

use App\BidUser;
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

   
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

   

    public function show($payment_id){
    

        try {
            
            
             $payment_gateway = Payments_Gateway::find($payment_id);
             $receipt= Receipt::find($payment_gateway->receipts_id);
             return view('backend.payment-gateway.show',compact('payment_gateway','recipt'));
             
      
            
        } catch (\Exception $e) {
            return $e->getMessage();
        } 
    }

   
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}