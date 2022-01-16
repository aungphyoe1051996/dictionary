<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', function () {
    return view('frontend.index');
});

Route::post('user/store','App\Http\Controllers\UserController@store')->name('users.store');

Route::get('/suggest-word/create', 'App\Http\Controllers\SuggestedWordController@create')->name('suggest_word.create');
Route::post('/suggest-word/store', 'App\Http\Controllers\SuggestedWordController@store')->name('suggest_word.store');
Route::get('/about',function(){
    return view('frontend.about');
})->name('about');
