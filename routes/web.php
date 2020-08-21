<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('backend/dashboard');
});


//**************  All   Backends Routes     */
Route::group(['prefix' => 'backend', 'middleware' => ['auth','has_permission']], function() {


    Route::resources([
        'packages' => 'Backend\PackagesController',
        

        //User Rolls.Permissions, Management Routes
        'users' =>  'Backend\UserController',
        'roles' =>  'Backend\RoleController',
	    'permissions' => 'Backend\PermissionController',
    ]);

    Route::post('package-delete', 'Backend\PackagesController@delete')->name('packages.delete');


    
    //***************************Product Routes*********************

    Route::get('/products','ProductController@index');//index page
    Route::get('/addproducts','ProductController@addproductindex');//index page
    Route::get('/editproducts/{id}','ProductController@editproductindex');//edit page
    Route::put('/editproducts/{id}','ProductController@edit');//edit 
    Route::post('/addproducts','ProductController@productstore');//store

    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');