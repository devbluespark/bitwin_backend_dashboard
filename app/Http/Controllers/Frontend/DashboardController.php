<?php

namespace App\Http\Controllers\Frontend;

use App\Bid_Record;
use App\Bid_Users_Has_Package;
use App\Dashboard;
use App\Free_Roll;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Traits\bidCalTrait;
use App\Package;
use App\Parent_User_Has_Roll;
use App\Referral;
use App\Win_Record;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    use bidCalTrait;

    //return to frontend dashboard
    public function index()
    {
        $user_id = Auth::guard('biduser')->user()->id;


        $latest_products = Product::orderBy('id', 'desc')
            ->where('product_delete_status', 0)
            ->where('product_active', 1)
            ->where('product_expired', 0)
            ->take(15)->get();

        foreach ($latest_products as $product) {

            $product['bid_records_percentage'] = $this->status_bar($product);
        }

        //get user Rolls(free,bonus,buy)
        $rolls = $this->getUserRolls();


        //calcilation win products
        $win_products_count = Win_Record::where('bid_users_id', $user_id)->count();


        //Get All Referels
        $referels_count = Referral::where('parent_user_id', $user_id)->count();


        return view('frontend/dashboard/index', compact('latest_products', 'rolls', 'win_products_count', 'referels_count'));
    }




    public function status_bar($product)
    {

        try {
            $how_many_bids = ($product->product_price / ($product->product_bid_rolls * 0.027));

            $how_many_bids_int = intval($how_many_bids);

            if (($how_many_bids - $how_many_bids_int) > 0) {
                $how_many_bids_int = $how_many_bids_int + 1;
            }


            $bid_records_count = Bid_Record::where('products_id', $product->id)->count();

            $bid_records_percentage = (($bid_records_count / $how_many_bids_int) * 100);
            return $bid_records_percentage;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getBidChartVal()
    {

        $user_id = Auth::guard('biduser')->user()->id;
        $lastSevenDays = [];
        $respArr = [];

        for ($i = 0; $i < 7; $i++) {
            $tmpToday = Carbon::parse(Carbon::now()->isoFormat('Y-M-D'));
            $tmp = $tmpToday->subDays($i);
            array_push(
                $lastSevenDays,
                $tmp
            );
        }

        for ($j = 0; $j < count($lastSevenDays); $j++) {
            $data = DB::table('bid_records')
                ->whereDate('created_at', $lastSevenDays[$j])
                ->where('bid_users_id', $user_id)
                ->get();

            array_push(
                $respArr,
                [
                    $lastSevenDays[$j]->format('Y-m-d'),
                    count($data)
                ]
            );
        }

        return response()->json([
            $respArr
        ]);

        // Response Array format 
        // return response()->json([
        //     0 => ['04-11-2020', 4],
        //     1 => ['03-11-2020', 14],
        //     2 => ['02-11-2020', 6],
        //     3 => ['01-11-2020', 11],
        //     4 => ['31-10-2020', 25],
        //     5 => ['30-10-2020', 9],
        //     6 => ['29-10-2020', 19]
        // ]);
    }
}
