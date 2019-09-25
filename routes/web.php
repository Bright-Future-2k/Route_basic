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


//use App\Http\Controllers\HomeController;
//use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact',function (){
   echo "<h2>this is contact page</h2>";
});
Route::get('/user/{name?}',function ($name = 'Nam cao'){
    echo "<h2> Name author is $name </h2>";
});

Route::get('/','HomeController@index');
