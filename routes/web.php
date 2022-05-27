<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Session\Store;
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

Route::get('/', function () {
    return view('signin');
});

Route::get('/register', function() {
    return view('registration.create');
});
Route::post('/register', function() {

    return redirect()->to('/signin');

});

Route::get('/main', function() {
    return view('main');
});

Route::get('/cart', function() {
    return view('cart');
});

Route::get('/warehouse', function() {
    return view('admin.warehouse');
});

Route::get('/order', function() {
    return view('admin.order');
});

Route::get('/admsignin', function() {
    return view('admsignin');
});