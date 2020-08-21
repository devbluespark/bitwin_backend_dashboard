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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend/dashboard');
});


//**************  All   Backends Routes     */
Route::prefix('backend')->group(function () {



    //Route::get('/packages', 'Backend\PackagesController@index')->name('packages.index');
    //Route::get('/packages/{package}', 'Admin\PackagesController@show');
    // Route::get('/packages/{package}/edit', 'Admin\PackagesController@edit');
    // Route::get('/packages/change_state', 'Admin\PackagesController@change_state');

    Route::resources([
        'packages' => 'Backend\PackagesController',
        // 'posts' => 'PostController'
    ]);

    Route::post('package-delete', 'Backend\PackagesController@delete')->name('packages.delete');


    
});