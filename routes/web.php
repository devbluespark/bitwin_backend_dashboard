<?php


//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/', function () {
  //  return redirect()->route('user.login');
//});

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('/dashboard', function () {
    return view('backend/dashboard');
});

Route::get('/index', function () {
    return view('frontend/index');
});




//**************  All   Backends Routes     */
Route::group(['prefix' => 'backend'], function() {

    Auth::routes();

    Route::middleware(['auth', 'has_permission'])->group(function () {
        

        Route::resources([
            'packages' => 'Backend\PackagesController',
            
    
            //User Rolls.Permissions, Management Routes
            'users' =>  'Backend\UserController',
            'roles' =>  'Backend\RoleController',
            'permissions' => 'Backend\PermissionController',
            'payments-gateways' => 'Backend\PaymentgatewayController',
            'payments-receipts' => 'Backend\PaymentbankController',
        
      

            //products
            'products'=>'Backend\ProductsController',

            //customer
            'customers'=>'Backend\CustomerController',

            //bidrecords
            'bidrecords'=>'Backend\BidRecordsController',

            //winrecords
            'winrecords'=>'Backend\WinRecordsController',

        ]);

        Route::post('payments-receipts-confirmed','Backend\PaymentbankController@payment_confirmed')->name('payments-receipts.confirmed');

     //***************************Product Routes*********************
    Route::post('/productdelete', 'Backend\ProductsController@delete');
    Route::post('/productpublish', 'Backend\ProductsController@publish');
    Route::post('/productunpublish', 'Backend\ProductsController@unpublish');
    

    //***************************Backend Customer Routes*********************
    Route::post('/customeractivate', 'Backend\CustomerController@activate');
    Route::post('/customerdeactivate', 'Backend\CustomerController@deactivate');
    Route::get('/customer_details_all/{id}', 'Backend\CustomerController@customer_details_all');


     


    });
  
});



// ALl Front End Routes //

    


    //Route::get('login', 'AuthUser\LoginController@getBidUserLoginForm')->name('user.login');
   // Route::post('login','AuthUser\LoginController@bidUserLogin')->name('user.login');
   
    Route::get('login', 'AuthUser\LoginController@showLoginForm')->name('user.login');
    Route::post('login','AuthUser\LoginController@login');
   
    
    Route::post('logout', 'AuthUser\LoginController@logout')->name('user.logout');








    //password reset

    Route::post('password/email', 'AuthUser\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');


    Route::get('password/reset', 'AuthUser\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
    Route::post('password/reset', 'AuthUser\ResetPasswordController@reset');
    Route::get('password/reset/{token} ', 'AuthUser\ResetPasswordController@showResetForm')->name('user.password.reset');
   
   
   
   
   
   
   
   
   
   
   
   
   
    // Registration Routes...
    Route::get('register', 'AuthUser\RegisterController@showRegistrationForm')->name('user.register');
    Route::post('register', 'AuthUser\RegisterController@register');


    Route::post('password/email', 'AuthUser\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
    Route::get('password/reset', 'AuthUser\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
    Route::post('password/reset ', 'AuthUser\ForgotPasswordController@reset');
    Route::get('password/reset/{token}', 'AuthUser\ForgotPasswordController@showResetForm')->name('user.password.reset');



    Route::group(['middleware' => ['biduser']], function () {
      //  Route::get('admin/dashboard', ['as'=>'admin.dashboard','uses'=>'AdminController@dashboard']);
    
        Route::resources([
            'profile' => 'Frontend\ProfileController',
            
        ]);

    
        Route::get('/referrals', 'Frontend\ReferralController@index');
       
    });


    Route::get('/user/verify/{token}', 'AuthUser\RegisterController@verifyUser');



    Route::get('/reg/{token}', 'Frontend\ReferralController@showRegisterForm');