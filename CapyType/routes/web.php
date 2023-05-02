<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('/type', function () {
    return view('typing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/typing', function () {
    return view('typing');
});

// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/login', [AuthManager::class, 'login']);
Route::post('/login', [AuthManager::class, 'signin']);
Route::post('/register', [AuthManager::class, 'signup']);
Route::post('/logout', [AuthManager::class, 'logout']);

Route::get('/leaderboard', function () {
    return view('leaderboard');
});

Route::get('/setting', function () {
    return view('setting');
});
Route::get('/custom', function () {
    return view('custom');
});
