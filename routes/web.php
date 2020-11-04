<?php


    Route::get('/home', 'Backend\DashboardController@index')->middleware('auth','has_permission');




//**************  All   Backends Routes     */
Route::group(['prefix' => 'backend'], function () {

    Auth::routes(['register' => false]);
    // Route::view('register', '')->name('register');
    Route::get('register', function () {
        return "<h1>404 Error</h1>";
        // view('errors/404');
    })->name('register');

    Route::get('/home', 'HomeController@index')->name('home');

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
            'products' => 'Backend\ProductsController',

            //customer
            'customers' => 'Backend\CustomerController',

            //bidrecords
            'bidrecords' => 'Backend\BidRecordsController',

            //winrecords
            'winrecords' => 'Backend\WinRecordsController',

        ]);

        Route::post('payments-receipts-confirmed', 'Backend\PaymentbankController@payment_confirmed')->name('payments-receipts.confirmed');

        //***************************Product Routes*********************
        Route::post('/productdelete', 'Backend\ProductsController@delete');
        Route::post('/productpublish', 'Backend\ProductsController@publish');
        Route::post('/productunpublish', 'Backend\ProductsController@unpublish');


        //***************************Backend Customer Routes*********************
        Route::post('/customeractivate', 'Backend\CustomerController@activate');
        Route::post('/customerdeactivate', 'Backend\CustomerController@deactivate');
        Route::get('/customer_details_all/{id}', 'Backend\CustomerController@customer_details_all');


        Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard.index');
        Route::get('/refferal-packages-price', 'Backend\RefferalPackagesController@index')->name('refferal-packages.index');

        //find winner
        Route::get('/find-winner','Backend\FindWinnerController@index')->name('findwinner.index');
        Route::get('/find-winner-finished/{product_id}','Backend\FindWinnerController@find_winner')->name('findwinner.cal');


        //US VS LKR
        Route::get('/currency','Backend\CurrencyController@index')->name('currency.index');

        //ajax Routes call
        Route::post('ajax-image-delete', 'Backend\ProductsController@ajaxImageDelete')->name('ajax-image-delete');
        Route::post('ajax-roll-price', 'Backend\CurrencyController@ajaxUpdateRollPrice')->name('ajax-roll-price');
        Route::post('ajax-convert-us-lkr', 'Backend\CurrencyController@ajaxUpdateUsLkr')->name('ajax-convert-us-lkr');

    });
});





/*  -------------------------------- All Frontend Routes ------------------- */


//user Login
Route::get('login', 'AuthUser\LoginController@showLoginForm')->name('user.login');
Route::post('login', 'AuthUser\LoginController@login');

//Logout
Route::post('logout', 'AuthUser\LoginController@logout')->name('user.logout');



//Register
Route::get('register', 'AuthUser\RegisterController@showRegistrationForm')->name('user.register');
Route::post('register', 'AuthUser\RegisterController@register');




//password reset
Route::post('password/email', 'AuthUser\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
Route::get('password/reset', 'AuthUser\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
Route::post('password/reset', 'AuthUser\ResetPasswordController@reset');
Route::get('password/reset/{token} ', 'AuthUser\ResetPasswordController@showResetForm')->name('user.password.reset');

// Route::post('password/reset', 'AuthUser\ForgotPasswordController@reset');
// Route::get('password/reset/{token}', 'AuthUser\ForgotPasswordController@showResetForm')->name('user.password.reset');


// VerifyUser Using Email
Route::get('/user/verify/{token}', 'AuthUser\RegisterController@verifyUser');


//Referrals Register Using Register Form
Route::get('/reg/{token}', 'Frontend\ReferralController@showRegisterForm');


Route::group(['middleware' => ['biduser']], function () {



    Route::get('profiles','Frontend\ProfileController@index')->name('user.profiles.index');
    Route::post('profiles','Frontend\ProfileController@store')->name('user.profiles.store');


    Route::get('dashboard/{timezone}', 'Frontend\DashboardController@index')->name('user.dashboard.timezone');




    //frontend routes to return dashboard views
    Route::get('dashboard', 'Frontend\DashboardController@index')->name('user.dashboard.index');


    Route::get('products', 'Frontend\ProductController@index')->name('user.products.index');
    Route::post('products-bid','Frontend\ProductController@user_bid')->name('user.products.bid');
    Route::post('payment-process','Frontend\PaymentController@index')->name('user.payment.process');

    Route::get('history', 'Frontend\HistoryController@index')->name('user.history.index');
    Route::get('Bid-product/{bid_product}','Frontend\HistoryController@product_details')->name('user.bid_products.show');


    Route::get('referrals', 'Frontend\ReferralController@index')->name('user.referrals.index');
    Route::get('packages', 'Frontend\PackagesController@index')->name('user.packages.index');

    //ajax data
    Route::post('ajax-users-rolls', 'Frontend\ProductController@ajaxUsersRolls')->name('ajax.users.rolls');

    Route::get('dashboard-chart', 'Frontend\DashboardController@getBidChartVal')->name('dashboard.chart');

    route::get('check','Frontend\PaypalController@check');

    Route::get('listen', function(){
       return view('frontend.test');
    });


});



Route::post('paypal/notify','Frontend\PaypalController@nofiry_url');
Route::post('paypal/cancel','Frontend\PaypalController@cancel_url');
Route::get('paypal/return','Frontend\PaypalController@return_url');




//------------------------------tempory routs for front index
Route::get('/', function () {
    return view('frontend/index');
});

    // //------------------------------tempory routs for front login
    // Route::get('/flogin', function () {
    //     return view('frontend/login');
    // });

    //------------------------------tempory routes for front register
    // Route::get('/fregister', function () {
    //     return view('frontend/register');
    // });



    // route::post('check_form','Frontend\PaypalController@check_form');

