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

//Super Admin Controller

//Admin Controller
Route::get('/administratordashboard', 'AdminDashboard\DashboardController@index')->name('administratordashboard');


// Transaksi Top Up AOV Controller
Route::get('/administratordashboard/transaksitopupaov', 'AdminDashboard\TransaksiTopUp@transaksitopupaov')->name('transaksitopupaov');

//Top Up Controller
Route::get('/administratordashboard/topup', 'AdminDashboard\TopUpController@index')->name('topupdashboard');
Route::get('/administratordashboard/topup/list/{id}', 'AdminDashboard\TopUpController@lihattopupadmin')->name('topupadmindashboard');
Route::get('/administratordashboard/topup/insert/{id}', 'AdminDashboard\TopUpController@inserttopupadmin')->name('inserttopupdashboard');
Route::get('/administratordashboard/topup/update/{id}/{id_game}', 'AdminDashboard\TopUpController@updatetopupadmin')->name('updatetopupdashboard');
Route::post('/administratordashboard/topup/prosesupdate', 'AdminDashboard\TopUpController@prosesupdatetopupadmin')->name('prosesupdatetopupdashboard');
Route::post('/administratordashboard/topup/delete/{id}/{id_game}', 'AdminDashboard\TopUpController@deletetopupadmin')->name('deletetopupdashboard');
//Game Controler
Route::get('/administratordashboard/games', 'AdminDashboard\GameController@index')->name('gamesdashboard');
Route::get('/administratordashboard/games/insert', 'AdminDashboard\GameController@insert')->name('insertgamesdashboard');
Route::post('/administratordashboard/games/prosesinsert', 'AdminDashboard\GameController@prosesinsert')->name('prosesinsertgamesdashboard');
Route::get('/administratordashboard/games/update/{id}', 'AdminDashboard\GameController@update')->name('updategamesdashboard');
Route::post('/administratordashboard/games/prosesupdate', 'AdminDashboard\GameController@prosesupdate')->name('prosesupdategamesdashboard');
Route::get('/administratordashboard/games/delete/{id}', 'AdminDashboard\GameController@delete')->name('deletegamesdashboard');
//Tier Booster Controller
Route::get('/administratordashboard/tierbooster', 'AdminDashboard\TierBooster@index')->name('tierboosterdashboard');
Route::get('/administratordashboard/tierbooster/list/{id}', 'AdminDashboard\TierBooster@lihattieradmin')->name('tierboosteradmindashboard');
Route::get('/administratordashboard/tierbooster/insert/{id}', 'AdminDashboard\TierBooster@inserttieradmin')->name('inserttierdashboard');
Route::post('/administratordashboard/tierbooster/prosesinsert', 'AdminDashboard\TierBooster@prosesinserttieradmin')->name('prosesinserttopupdashboard');
Route::get('/administratordashboard/tierbooster/update/{id}/{id_game}', 'AdminDashboard\TierBooster@updatetieradmin')->name('updatetierdashboard');
Route::post('/administratordashboard/tierbooster/prosesupdate', 'AdminDashboard\TierBooster@prosesupdatetierdmin')->name('prosesupdatetierdashboard');
Route::get('/administratordashboard/tierbooster/delete/{id}/{id_games}', 'AdminDashboard\TierBooster@deletetieradmin')->name('deletetierdashboard');
//Hitung AOV
Route::get('/hitung/aov/{idawal}/{idakhir}/{id_games}', 'AdminDashboard\HitungAOV@index')->name('hitungaov');
Route::get('/hitung/ff/{idawal}/{idakhir}/{id_games}', 'AdminDashboard\HitungAOV@index')->name('hitungff');
Route::get('/validasirankakhir/{id}', 'AdminDashboard\HitungAOV@validasirankakhir')->name('validasirankakhir');
Route::get('/validasirankakhir/ff/{id}', 'AdminDashboard\HitungFF@validasirankakhir')->name('validasirankakhir');
Route::get('/hitungharga/aov/{id}', 'User\HitungHargaController@index')->name('hitunghargaaov');

Route::get('/', 'User\HomeController@index')->name('home');
Route::get('/topupaov', 'User\HomeController@topupaov')->name('topupaov');
Route::get('/konfaov', 'User\HomeController@konfaov')->name('konfaov');
Route::get('/prosestopupaov', 'User\HomeController@prosestopupaov')->name('prosestopupaov');
Route::get('/topupff', 'User\HomeController@topupff')->name('topupff');
Route::get('/tierbosteraov', 'User\HomeController@tierbosteraov')->name('tierbosteraov');
Route::get('/tierbosterff', 'User\HomeController@tierbosterff')->name('tierbosterff');
Route::get('/tierbosterpubgm', 'User\HomeController@tierbosterpubgm')->name('tierbosterpubgm');

//Konfirmasi Pembayaran
Route::post('/topupaov/konfirmasipembayaran', 'User\KonfirmasiPembayaran@konfirmasipembayaranaov')->name('konfirmasipembayaranaov');
Route::get('/topupaov/lhtgambar/{foto}', 'User\KonfirmasiPembayaran@lhtfotoaov')->name('lhtfotoaov');
