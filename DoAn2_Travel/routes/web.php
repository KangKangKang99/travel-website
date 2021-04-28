<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
Route::get('thankyou',function (){
    return view('Page_views.BookingPage');
});

/*Admin*/
/*Destination*/
Route::get('/add-destination','App\Http\Controllers\DestinationController@index');
Route::post('/save-destination','App\Http\Controllers\DestinationController@add');
Route::get('/list-destination','App\Http\Controllers\DestinationController@show_list');
Route::get('/edit-destination/{destination_id}','App\Http\Controllers\DestinationController@edit');
Route::post('/update-destination/{destination_id}','App\Http\Controllers\DestinationController@update');
Route::get('/delete-destination/{destination_id}','App\Http\Controllers\DestinationController@delete');
Route::get('/enable-destination/{destination_id}','App\Http\Controllers\DestinationController@enable');
Route::get('/disable-destination/{destination_id}','App\Http\Controllers\DestinationController@disable');
/*.........................................................................................................................*/
/*Type tour*/
Route::get('/add-type-tour','App\Http\Controllers\TypetourController@index');
Route::post('/save-type-tour','App\Http\Controllers\TypetourController@add');
Route::get('/list-type-tour','App\Http\Controllers\TypetourController@show_list');
Route::get('/edit-type-tour/{destination_id}','App\Http\Controllers\TypetourController@edit');
Route::post('/update-type-tour/{destination_id}','App\Http\Controllers\TypetourController@update');
Route::get('/delete-type-tour/{destination_id}','App\Http\Controllers\TypetourController@delete');
Route::get('/enable-type-tour/{destination_id}','App\Http\Controllers\TypetourController@enable');
Route::get('/disable-type-tour/{destination_id}','App\Http\Controllers\TypetourController@disable');
/*.........................................................................................................................*/
/*Tour*/
Route::get('/add-tour','App\Http\Controllers\TourController@index');
Route::post('/save-tour','App\Http\Controllers\TourController@add');
Route::get('/list-tour','App\Http\Controllers\TourController@show_list');
Route::get('delete-tour/{id_tour}','App\Http\Controllers\TourController@delete');
Route::get('edit-tour/{tour_id}','App\Http\Controllers\TourController@edit');
Route::post('update-tour','App\Http\Controllers\TourController@update');
/*.........................................................................................................................*/
/*Booking*/
Route::get('/list-booking/{status}','App\Http\Controllers\BookingController@show_list');
Route::get('/details-booking/{booking_id}','App\Http\Controllers\BookingController@detail');
Route::post('/update-booking','App\Http\Controllers\BookingController@update');
/*.........................................................................................................................*/
/*Staff*/
Route::get('/add-staff','App\Http\Controllers\StaffController@add_staff');
Route::post('/save-staff','App\Http\Controllers\StaffController@save_staff');
Route::get('/list-staff/{position_id}','App\Http\Controllers\StaffController@show_list');
/*.........................................................................................................................*/
/*Contracts*/
Route::get('/new-contract','App\Http\Controllers\ContractController@new_contract');
Route::post('/add-contract','App\Http\Controllers\ContractController@add_contract');
Route::post('/save-contract','App\Http\Controllers\ContractController@save_contract');
Route::get('/list-contract/{contract_status}','App\Http\Controllers\ContractController@list_contract');
Route::get('/detail-contract/{contract_id}','App\Http\Controllers\ContractController@detail_contract');
Route::post('/update-contract','App\Http\Controllers\ContractController@update');
/*.........................................................................................................................*/
/*Dashboard*/
Route::get('dashboard','App\Http\Controllers\HomeController@dashboard');
Route::get('select-year','App\Http\Controllers\HomeController@select_year')->name('select_year');
/*.........................................................................................................................*/
/*Page views*/
Route::get('','App\Http\Controllers\HomeController@index');
Route::get('/destination/{destination_name_EN}','App\Http\Controllers\DestinationController@show_dest_detail');
Route::get('destination','App\Http\Controllers\DestinationController@show_page');
Route::get('/type-of-tour/{typetour_name_EN}','App\Http\Controllers\TypetourController@show_type_detail');
Route::get('/type-of-tour','App\Http\Controllers\TypetourController@show_page');
Route::get('tour/{tour_name_EN}','App\Http\Controllers\TourController@show_tour_detail');
Route::post('booking','App\Http\Controllers\BookingController@booking');
Route::get('search-1','App\Http\Controllers\HomeController@Search_1');
Route::get('search-2','App\Http\Controllers\HomeController@Search_2');
Route::get('customer-review/{booking_code}','App\Http\Controllers\BookingController@customer_review');
Route::post('save-customer-review','App\Http\Controllers\BookingController@save_customer_review');
/*.........................................................................................................................*/
/*Login*/
Route::post('login','App\Http\Controllers\LoginController@login');
Route::get('admin','App\Http\Controllers\LoginController@index');
Route::get('logout','App\Http\Controllers\LoginController@logout');
/*Route::get('contract',function (){
    return view('Admin_Views.Booking_Management.Contract_New');
});*/
/*Route::get('/add-tour',function (){
    return view('Admin_Views.Tour_Management.Add_Tour');
});*/
/*Route::get('/add-destination',function (){
    return view("Admin_views.Tour_Management.Add_Destination");
});*/
/*Route::get('/admin',function (){
    return view('Admin_Views.AdminLogin');
});*/
Route::get('/contact',function (){
    return view('Page_Views.ContactPage');
});
/*Route::get('/type-of-tour',function (){
    return view('Page_Views.TypetourPage');
});*/
/*Route::get('/detail-tour',function(){
    return view('Page_Views.DetailsTourPage');
});*/
/*
Route::get('/detail-destination',function(){
    return view('Page_Views.Details_Destination');
});*/

//switch language
Route::group(['middleware'=>['web']],function (){
    Route::get('language/{language}','App\Http\Controllers\LanguageController@index')->name('language');});


/*test-form-ajax*/
/*Route::get('my-form','HomeController@myform');
Route::post('my-form','HomeController@myformPost');*/
