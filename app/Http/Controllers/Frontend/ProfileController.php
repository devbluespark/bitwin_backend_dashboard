<?php

namespace App\Http\Controllers\Frontend;

use App\Bid_User;
use App\BidUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class ProfileController extends Controller
{
    public function index(){
        try {

           $bid_user= Bid_User::find((Auth::guard('biduser')->user()->id));
           return view('frontend.profile.index',compact('bid_user'));
            // return view('frontend.profile.index');

        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function edit($id){
        try {
        $bid_user=Bid_User::find($id);
        return view('frontend.profile.edit',compact('bid_user'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }




    public function store(Request $request){


       $data=$request->validate([
            'user_fname' => 'required|min:3|max:15',
            'user_lname'=> 'required|min:3|max:20',
            'user_phn1' => 'required|numeric|min:8',
            'user_phn2'=> 'sometimes|numeric|min:8',
            'user_address' => 'required|min:5|max:100',
            'user_nic' => 'required|min:5|max:20',
            'user_image'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);


        if ($files = $request->file('user_image')) {
            $destinationPath = 'storage/images/bid_users/'; // upload path
            $profileImage = date('YmdHis') . Str::random(10). "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $data['user_image'] = $profileImage;

            //delete old image
            $image_path = public_path('storage/images/bid_users') . '/' . $request->old_image;
             unlink($image_path);

        }

        $update_user = Bid_User::where('id',Auth::guard('biduser')->user()->id)
                    ->update($data);
        return redirect()->back();

    }


    //public function ShowD(){
      //  $win_details=(Auth::guard('biduser')->user()->id)
    //}






}
