<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/add-weguard-trial', 'WeguardContact@weguard_trial')->name('wecontact.trial');
Route::post('/add-weguard-buy', 'WeguardContact@weguard_buy')->name('wecontact.buy');




