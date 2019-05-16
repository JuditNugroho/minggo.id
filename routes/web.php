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

//Top Up Controller
Route::get('/administratordashboard/topup', 'AdminDashboard\TopUpController@index')->name('topupdashboard');
Route::get('/administratordashboard/topup/list/{id}', 'AdminDashboard\TopUpController@lihattopupadmin')->name('topupadmindashboard');
Route::get('/administratordashboard/topup/insert/{id}', 'AdminDashboard\TopUpController@inserttopupadmin')->name('inserttopupdashboard');
Route::post('/administratordashboard/topup/prosesinsert', 'AdminDashboard\TopUpController@prosesinserttopupadmin')->name('prosesinsertsuptopupdashboard');
Route::get('/administratordashboard/topup/delete/{id}/{id_games}', 'AdminDashboard\TopUpController@deletetopupadmin')->name('deletetopupdashboard');
Route::get('/administratordashboard/topup/update/{id}/{id_game}', 'AdminDashboard\TopUpController@updatetopupadmin')->name('updatetopupdashboard');
Route::post('/administratordashboard/topup/prosesupdate', 'AdminDashboard\TopUpController@prosesupdatetopupadmin')->name('prosesupdatetopupdashboard');

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
