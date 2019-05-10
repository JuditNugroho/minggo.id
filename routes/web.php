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
/*
Route::get('/', function () {
    return view('welcome');
});*/

//Super Admin Controller


//Admin Controller
Route::get('/administratordashboard', 'AdminDashboard\DashboardController@index')->name('administratordashboard');
Route::get('/administratordashboard/topup', 'AdminDashboard\TopUpController@index')->name('topupdashboard');
Route::get('/administratordashboard/topup/list/{id}', 'AdminDashboard\TopUpController@lihattopupadmin')->name('topupadmindashboard');
Route::get('/administratordashboard/topup/insert/{id}', 'AdminDashboard\TopUpController@inserttopupadmin')->name('inserttopupdashboard');
Route::post('/administratordashboard/topup/prosesinsert', 'AdminDashboard\TopUpController@prosesinserttopupadmin')->name('prosesinsertsuptopupdashboard');
Route::get('/administratordashboard/topup/delete/{id}/{id_games}', 'AdminDashboard\TopUpController@deletetopupadmin')->name('deletetopupdashboard');
Route::get('/administratordashboard/topup/update/{id}/{id_game}', 'AdminDashboard\TopUpController@updatetopupadmin')->name('updatetopupdashboard');
Route::post('/administratordashboard/topup/prosesupdate', 'AdminDashboard\TopUpController@prosesupdatetopupadmin')->name('prosesupdatetopupdashboard');


Route::get('/', 'User\HomeController@index')->name('home');
Route::get('/topupaov', 'User\HomeController@topupaov')->name('topupaov');
Route::get('/topupff', 'User\HomeController@topupff')->name('topupff');
Route::get('/tierbosteraov', 'User\HomeController@tierbosteraov')->name('tierbosteraov');
Route::get('/tierbosterff', 'User\HomeController@tierbosterff')->name('tierbosterff');
