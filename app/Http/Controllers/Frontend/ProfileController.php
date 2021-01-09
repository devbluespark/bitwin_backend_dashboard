<?php

namespace App\Http\Controllers\Frontend;

use App\BidUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index(){
        try {

            //$bid_user= BidUser::find((Auth::guard('biduser')->user()->id));
          //  return view('frontend.profile.index',compact(bid_user));
            return view('frontend.profile.index');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function edit($id){
        try {
        $bid_user=BidUser::find($id);
        return view('frontend.profile.edit',compact('bid_user'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, $bid_user){
        
            
        $data=$request->validate([
            'user_fname' => 'required|min:3|max:15',
            'user_lname'=> 'required||min:3|max:20',
            'user_phn1' => 'required|numeric|min:8',
            'user_phn2'=> 'required|numeric|min:8',
            'user_address' => 'required|min:5|max:100',
            'user_nic' => 'required|min:5|max:20',
            'user_image'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);

        try {
            


            $bid_user = BidUser::find($bid_user);


            if ($files = $request->file('user_image')) {
                if ($bid_user->user_image !== null) {
    
                $destinationPath = 'public/user_images/';
                $image_path = $destinationPath.$bid_user->user_image;
    
                    if(file_exists($image_path)){
                        unlink($image_path);
                      }
    
                }
    
                $destinationPath = 'public/user_images/'; // upload path
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $insert['user_image'] = "$profileImage";
     
                $data['user_image'] =implode($insert);
             }
         
    
            $bid_user->update($data);
            return redirect('profile');




        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }



    //public function ShowD(){
      //  $win_details=(Auth::guard('biduser')->user()->id)
    //}






}