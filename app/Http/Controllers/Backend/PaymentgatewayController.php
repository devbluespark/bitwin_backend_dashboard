<?php

namespace App\Http\Controllers\Backend;

use App\BidUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Package;
use App\PaymentGateway;

class PaymentgatewayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        try {
            $payments = PaymentGateway::all();
            return view('backend.payment-gateway.index', compact('payments'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentGateway $payment)
    {
        try {
            $package = Package::find($payment->payment_id);
            $bid_user = BidUser::find($payment->payment_id);
            
            return view('backend.packages.show',compact('payment','user'));
        } catch (\Exception $e) {
            return $e->getMessage();
        } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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