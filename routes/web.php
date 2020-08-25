<?php


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('backend/dashboard');
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
            'payments-reciepts' => 'Backend\PaymentbankController',
        ]);


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
    Route::post('/customerdeactivate', 'Backend\CustomerController@deactvate');
    
    
    
});


Route::get('/home', 'HomeController@index')->name('home');