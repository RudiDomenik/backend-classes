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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('class/list', 'App\Http\Controllers\Items@list');
Route::get('teacher/list', 'App\Http\Controllers\Teachers@list');
Route::get('student/list', 'App\Http\Controllers\Students@list');
Route::post('class/add', 'App\Http\Controllers\Items@addClass');
