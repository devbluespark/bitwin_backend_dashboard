<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Roll_Price;
use App\Us_To_Lkr;
use Illuminate\Support\Facades\Auth;

class CurrencyController extends Controller
{
    public function index(){
       $roll_price = Roll_Price::find(1);
       $us_to_lkr = Us_To_Lkr::find(1);

        return view('backend.currency.index',compact('roll_price','us_to_lkr'));
    }



    public function ajaxUpdateRollPrice(){
        $roll_price = request()->roll_price;

        $update_roll_price = Roll_Price::find(1);
        $update_roll_price->roll_price = $roll_price;
        $update_roll_price->users_id = Auth::id();
        $update_roll_price->update();

        return response()->json([
            'response' => "Successfully Updated",
            ]);

    }


    public function ajaxUpdateUsLkr(){
         $convert_us_lkr = request()->convert_us_lkr;

         $update_convert_us_lkr = Us_To_Lkr::find(1);
         $update_convert_us_lkr->us_to_lkr =$convert_us_lkr;
         $update_convert_us_lkr->users_id = Auth::id();
         $update_convert_us_lkr->update();

         return response()->json([
            'response' => "Successfully Updated",
         ]);

    }


}
