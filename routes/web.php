<?php


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('backend/dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');


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
        
        ]);

        Route::post('payments-receipts-confirmed','Backend\PaymentbankController@payment_confirmed')->name('payments-receipts.confirmed');

     


    });
   

   

     //***************************Product Routes*********************
     Route::resources([
        'products'=>'Backend\ProductsController'
        ]);
    
    Route::post('/productdelete', 'Backend\ProductsController@delete');
    Route::post('/productpublish', 'Backend\ProductsController@publish');
    Route::post('/productunpublish', 'Backend\ProductsController@unpublish');
    

    //***************************Backend Customer Routes*********************
    Route::resources([
        'customers'=>'Backend\CustomerController'
        ]);
    
    Route::post('/customeractivate', 'Backend\CustomerController@activate');
    Route::post('/customerdeactivate', 'Backend\CustomerController@deactivate');


     //***************************Backend Bid details Routes*********************
    Route::resources([
        'biddetails'=>'Backend\BidDetailController'
        ]);
    
    Route::post('/customeractivate', 'Backend\CustomerController@activate');
    Route::post('/customerdeactivate', 'Backend\CustomerController@deactivate');
    
    
    
});



// ALl Front End Routes //

    


    //Route::get('login', 'AuthUser\LoginController@getBidUserLoginForm')->name('user.login');
   // Route::post('login','AuthUser\LoginController@bidUserLogin')->name('user.login');
   
    Route::get('login', 'AuthUser\LoginController@showLoginForm')->name('user.login');
    Route::post('login','AuthUser\LoginController@login');
   
    
    Route::post('logout', 'AuthUser\LoginController@logout')->name('user.logout');








    //password reset
    Route::get('password/reset', 'AuthUser\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
    Route::post('password/reset', 'AuthUser\ResetPasswordController@reset')->name('user.password.request');
 
    Route::post('password/email', 'AuthUser\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
    
    Route::post('password/reset/{token} ', 'AuthUser\ResetPasswordController@showResetForm')->name('user.password.reset');
   
   
   
   
   
   
   
   
   
   
   
   
   
    // Registration Routes...
    Route::get('register', 'AuthUser\RegisterController@register')->name('user.register');
    Route::post('register', 'AuthUser\RegisterController@store')->name('user.register');


    Route::get('forget-password', 'AuthUser\ForgotPasswordController@getEmail')->name('user.forgetpassword');
    Route::post('forget-password', 'AuthUser\ForgotPasswordController@postEmail');

    Route::group(['middleware' => ['biduser']], function () {
      //  Route::get('admin/dashboard', ['as'=>'admin.dashboard','uses'=>'AdminController@dashboard']);
    
        Route::resources([
            'profile' => 'Frontend\ProfileController',
            
        ]);

        Route::get('/dashboard', function () {
            return "hii admin";
        })->name('admin.dashboard');
    });