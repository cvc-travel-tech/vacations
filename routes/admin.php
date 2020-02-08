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

Route::group(['prefix' => 'backend', 'as' => 'admin.'], function () {

    // Config::set('auth.defines', 'admin');
    // Route::get('login', 'AdminAuthController@Login');
    // Route::post('login', 'AdminAuthController@doLogin')->name('dologin');

    Route::group(['middleware' => ['auth','admin']], function () {
        Route::get('/', "HomeController@index")->name('home');
                Route::get('company', "HomeController@company")->name('company');

        Route::resource('destination', 'DestinationController');
        Route::get('destination/{id}/delete', 'DestinationController@destroy')->name('destination.delete');

        Route::resource('sightseeing', 'SightseeingController');
        Route::get('sightseeing/{id}/delete', 'SightseeingController@destroy')->name('sightseeing.delete');

        Route::resource('cruise', 'CruiseController');
        Route::get('cruise/{id}/delete', 'CruiseController@destroy')->name('cruise.delete');

        Route::resource('package', 'PackageController');
        Route::get('package/{id}/delete', 'PackageController@destroy')->name('package.delete');

        Route::resource('booking', 'BookingController');
        Route::get('booking/{id}/delete', 'BookingController@destroy')->name('booking.delete');

        Route::resource('hotel', 'HotelController');
        Route::get('hotel/{id}/delete', 'HotelController@destroy')->name('hotel.delete');

        Route::resource('setting', 'SettingController');

        Route::get('products/data', 'DestinationController@reposList')->name('product.data');
        Route::any('logout', 'AdminAuthController@Logout')->name('logout');
        Route::resource('Blog', 'BlogController');
        Route::get('Blog/{id}/delete', 'BlogController@destroy')->name('Blog.delete');
        
        Route::post('media/store', 'MediaController@store')->name('media.store');
        Route::PUT('delete/{id}', 'BookingController@destroy1');
        Route::get('new/{id}', 'BookingController@Trensfer');
        Route::post('store/{id}', 'BookingController@update_tr');
        Route::post('store_acc/{id}', 'BookingController@update_Acc');
        Route::post('store_site/{id}', 'BookingController@update_site');
        Route::post('store_comp/{id}', 'BookingController@update_comp');

        Route::get('siteseeing/{id}', 'BookingController@siteseeing');
        Route::get('complimentry/{id}', 'BookingController@complimentry');
        Route::get('complimentryup/{id}', 'BookingController@complimentryup');
        Route::get('siteseeingup/{id}', 'BookingController@siteseeingup');
        
        Route::get('newa/{id}', 'BookingController@siteing');
        Route::get('accomup/{id}', 'BookingController@accomup');

        Route::get('details/{id}','BookingController@show');

        Route::get('pdf/{id}', 'BookingController@pdf');


        Route::POST('newTr', 'BookingController@TrensferAdd')->name('booking.Tran');;

        
        
    });

    Route::get('media/get', 'MediaController@getImages')->name('media.getImages');

    
});
