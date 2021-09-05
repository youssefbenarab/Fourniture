<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

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

Route::get('/', [homecontroller::class, 'index']);
Route::get('/Donate', [homecontroller::class, 'donate']);
Route::post('/Donate', [homecontroller::class, 'donating']);

Route::get('/Search', [homecontroller::class, 'search']);
Route::get('/account', [homecontroller::class, 'account']);
Route::post('/account', [homecontroller::class, 'myaccount']);
Route::post('/deleted', [homecontroller::class, 'delete']);

Route::get('/request/{fbid}', [homecontroller::class, 'requestPage']);
Route::post('/request/{fbid}', [homecontroller::class, 'SendRequest']);