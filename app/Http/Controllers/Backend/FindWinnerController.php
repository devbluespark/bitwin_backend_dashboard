<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Bid_Record;

use App\Http\Traits\bidCalTrait;

class FindWinnerController extends Controller
{
    use bidCalTrait;

    public function index(){
       $today_date = date('Y-m-d');

       $products_to_find_winners= Product::where('product_active',1)
                ->where('product_delete_status',0)
                ->where('product_expired',0)
                ->where('product_expired_date','<=',$today_date)
                ->get();

    foreach ($products_to_find_winners as $product_winner){
        $product_winner['product_percentage'] = $this->status_bar($product_winner);
    }


                // echo $products_to_find_winners;
        return view('backend.find-winner.index',compact('products_to_find_winners'));
    }



    public function find_winner($product_id){


      $has_winner = $this->findWinner($product_id);

      if($has_winner == true){

        //update product as Expired with expirad state auto


        Product::where('id', $product_id)
        ->update([
            'product_expired' => 1,
            'product_expired_date' => now(),
            'product_expired_auto' => 0,
        ]);

      }else{
        return redirect()->route('findwinner.index');
      }


    }






}
