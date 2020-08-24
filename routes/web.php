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
        ]);


        });
   

   
    
    //***************************Product Routes*********************

    Route::get('/products','ProductController@index');//index page
    Route::get('/addproducts','ProductController@addproductindex');//index page
    Route::get('/editproducts/{id}','ProductController@editproductindex');//edit page
    Route::put('/editproducts/{id}','ProductController@edit');//edit 
    Route::post('/addproducts','ProductController@productstore');//store

    
});


Route::get('/home', 'HomeController@index')->name('home');