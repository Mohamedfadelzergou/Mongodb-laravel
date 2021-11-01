<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ProfileController;

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
    if (!Auth::check()) {
        return view('auth.login');
    }else{
        return Redirect::back();
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::get('/user/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/user/{user}/edit', [App\Http\Controllers\ProfileController::class, 'index'])->name('editeprofile');
Route::get('/friends', [App\Http\Controllers\FriendController::class, 'index'])->name('friends');
Route::get('/friends/add/{user}', [App\Http\Controllers\FriendController::class, 'getAdd'])->name('addfriend');
Route::get('/friends/accept/{user}', [App\Http\Controllers\FriendController::class, 'getAccept'])->name('acceptfriend');
Route::get('/status', [App\Http\Controllers\StatusController::class, 'index'])->name('status');
Route::post('/status', [App\Http\Controllers\StatusController::class, 'store'])->name('status');
Route::post('/status/{status}/reply', [App\Http\Controllers\StatusController::class, 'reply'])->name('replystatus');
Route::get('/status/{status}/like', [App\Http\Controllers\StatusController::class, 'getLike'])->name('likestatus');
Route::get('/status/{status}/likereply', [App\Http\Controllers\StatusController::class, 'getLikereply'])->name('likereply');
