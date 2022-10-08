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

Route::get('/',"siteController@Home");

Route::get('/blog',"siteController@blog");
Route::get('/blog/{id}',"siteController@show");

Route::get('/about',"siteController@about");


Route::get('/service',"siteController@service");
Route::get('/service/{id}',"siteController@serviceDetails");

Route::get('/contact',"siteController@contact");
Route::post('/message',"siteController@store");




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
