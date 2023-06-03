<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Events\VehicleLocationUpdated;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/msg', function (Request $request) {
    $msg = Request::input('msg')??"not found";

    return Event::dispatch(new VehicleLocationUpdated( $msg));

});

Route::post('/broadcasting/auth', function (Request $request) {
    // Authenticate the request and return the user or false
    
    if (Auth::check()) {
        return Auth::user();
    }
    
    return false;
});