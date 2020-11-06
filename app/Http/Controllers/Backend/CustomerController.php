<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Customer;
use App\Bid_Record;
use App\Bid_User;
use App\Bid_Users_Has_Package;
use App\Win_Record;
use App\package;
use Illuminate\Http\Request;
// use DB;

use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function index()
    {
        try {
            // $customers = DB::table('bid_users')->get();
            $customers = Bid_User::select('id', 'user_fname', 'email', 'timezone', 'user_active')->get();
            return view('backend/customer/index', compact('customers'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }



    public function show($id)
    {
        try {
            // $customer = DB::table('bid_users')
            // ->where('id',$id)
            // ->first();
            // $customer=Bid_User::select('id','user_fname','user_lname','email','user_phn1','user_phn2','user_address','user_nic','user_image','user_active')->find($id);
            $customer = Bid_User::find($id);
            return view('backend/customer/show', compact('customer'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }





    //customer activate function
    public function activate(Request $request)
    {

        try {
            $customer = DB::table('bid_users')
                ->where('id', $request->id)
                ->update(['user_active' => '1']);
            return redirect('backend/customers');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    //customer deactivate function
    public function deactivate(Request $request)
    {


        try {
            $customer = DB::table('bid_users')
                ->where('id', $request->id)
                ->update(['user_active' => '0']);
            return redirect('backend/customers');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function customer_details_all($id)
    {

        try {
            $bid_records = Bid_Record::where('bid_users_id', $id)->get();
            $bid_user = Bid_User::where('id', $id)->first();
            $win_details = Win_Record::where('bid_users_id', $id)->get();

            $user_has_packages = Bid_Users_Has_Package::where('bid_users_id', $id)->get();

            $user_packages = NULL;

            foreach ($user_has_packages as $user_has_package) {
                $user_packages[] = package::find($user_has_package->packages_id);
            }

            return view('backend/biddetails/show', compact('bid_records', 'bid_user', 'win_details', 'user_packages'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function editView($id)
    {
        try {
            $customer = Bid_User::find($id);
            return view('backend/customer/edit', compact('customer'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function updateCustomer(Request $request)
    {
        try {
            $success = 'Successfully updated custom!';
            $error = 'Something went wrong, please try again later!';

            DB::table('bid_users')
                ->where('id', $request->user_id)
                ->update([
                    'user_fname' => $request->fName,
                    'user_lname' => $request->lName,
                    'email' => $request->email,
                    'user_phn1' => $request->mobile1,
                    'user_phn2' => $request->mobile2
                ]);

            return redirect()->back()->with($success);
        } catch (\Exception $e) {
            return $e->getMessage();
            // return redirect()->back()->with($error);
        }
    }
}
