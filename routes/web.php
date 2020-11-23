<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'viewController@home');
Route::get('/privacy-and-policy', 'viewController@privacy');
Route::get('/terms-and-conditions', 'viewController@termsconditions');
Route::get('/connect', 'viewController@connect');