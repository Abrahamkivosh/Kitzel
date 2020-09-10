<?php

use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
   // return view('welcome');
//});


Route::resource('posts', 'PostsController');



Auth::routes();

Route::group(['as' => 'admin.','prefix' => 'admin','namespace' =>'Admin','middleware' => ['auth','admin']],function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');

    Route::resource('/tours1', 'CreateTourController');

    Route::get('tours/{id}/images',"CreateTourController@createImages")->name("create.tour.images") ;
    Route::post('tours/{id}/images',"CreateTourController@uploadImages")->name("store.tour.images") ;
    Route::post('tours/images/delete',"CreateTourController@DeleteImages")->name("destroy.images") ;




});
Route::post('/tours/images/destroy', 'ImageController@destroyByName')->name('deleteTourImage');



Route::group(['as' => 'users.','prefix' => 'users','namespace' =>'Users','middleware' => ['auth','users']],function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');

    Route::get('my-orders','DashboardController@orders')->name('my-orders');

    Route::get('claims','ClaimsController@index')->name('claims');

    Route::get('my-profile','ProfileController@index')->name('my-profile');




    //Route::get('dashboard/profile','DashboardController@index')->name('dashboard');


});


Route::get('/users/orders','users\DashboardController@book');




//Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('admin/tours1', 'CreateTourController');

Route::resource('tours', 'ToursController');


//Route::resource('admin/tours1', 'ToursController');


Route::get('booking-checkout', 'BookingsController@bookingCheckout')->name("booking.checkout")->middleware('auth');
//Route::get('/tour-details/{tour_title}', 'ToursController@show');

Route::post('booking/{tours}', 'BookingsController@addTourToCart')->name('addTourToCart');

Route::post('booking-checkout', 'BookingsController@store')->name("booking.store");

Route::get('/tour-confirmation', 'ConfirmationController@index')->name("tour-confirmation");



Route::get('users/my-orders', 'PagesController@book');

Route::get('custom-tours', 'PagesController@custom');

Route::get('/payment', 'PagesController@pay');

Route::get('/', 'PagesController@index')->name('Home');

Route::get('/about-us', 'PagesController@about');

Route::get('/contact-us', 'PagesController@contact');

Route::get('/privacy-policy', 'PagesController@privacy');

Route::get('/404', 'PagesController@error');


//Route::get('dashboard', 'DashboardController@index');
