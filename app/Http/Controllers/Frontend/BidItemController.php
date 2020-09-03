<?php

namespace App\Http\Controllers\Frontend;

use App\Bid_Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BidItemController extends Controller
{
    //return to bid item view o dashboard
    public function index()
    {
        return view('frontend/bid_item/index') ;        

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show(Bid_Item $bid_Item)
    {
        //
    }

    public function edit(Bid_Item $bid_Item)
    {
        //
    }

    
    public function update(Request $request, Bid_Item $bid_Item)
    {
        //
    }

   
    public function destroy(Bid_Item $bid_Item)
    {
        //
    }
}