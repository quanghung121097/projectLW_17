<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//     dd($request->user());
//     return $request->user();
// });
Route::middleware(['auth_basic'])->group(function () {
    Route::prefix('v1')->group(function () {
        Route::get('/test', function () {
            dd(1);
        });
        
    });
});
Route::prefix('v2')->group(function () {
    Route::post('auth/register', 'Api\AuthJwtContoller@register');
    Route::post('auth/login', 'Api\AuthJwtContoller@login');
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('user-info', 'Api\AuthJwtContoller@getUserInfo');
    });
    Route::prefix('product')->group(function () {
        Route::get('search', 'Api\ApiProductController@search');
    });
});