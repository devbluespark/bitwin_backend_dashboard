<?php

namespace App\Http\Controllers\Frontend;

use App\Dashboard;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;


class DashboardController extends Controller
{
    
    public function index()
    {

        
        $u=Auth::guard('biduser')->user()->id ;
        try{
            $data=DB::table('packages')->where('user_id',$u)
            ->get();

            if($data){
                return $u;
            }else{
                return "sad";
            }
        }catch(Exception $e){
            return "sad";
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

    public function show(Dashboard $dashboard)
    {
        //
    }

   
    public function edit(Dashboard $dashboard)
    {
        //
    }

   
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

  
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
