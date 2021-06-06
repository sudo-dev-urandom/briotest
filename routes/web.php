<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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
    return view('/pages/home');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/location', function () {
    return view('pages/location');
});

Route::get('/ourteam', function () {
    return view('pages/ourteam');
});

Route::get('/service', function () {
    return view('pages/service');
});

Route::post('/send-email', [MailController::class, 'sendEmail']);