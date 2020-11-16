<?php

use App\Http\Controllers\Account;
use App\Http\Controllers\AdminIndex;
use App\Http\Controllers\Contactus;
use App\Http\Controllers\FrnotEndProducts;
use App\Http\Controllers\FrontEndProductDetails;
use App\Http\Controllers\Helloname;
use App\Http\Controllers\FrontEndHome;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\InvokeController;
use Carbon\Cli\Invoker;
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

// Testing Routes//
Route::get('/', function () {
    return view('welcome');
});

Route::get('test/{name}', [Helloname::class, 'helloname']);

//Baackend Routes//
Route::get('/login', [Account::class, 'login']);
Route::get('/adminindex', [AdminIndex::class, 'index']);


// Frontend Routes//

Route::get('/contactus', [Contactus::class, 'index']);
Route::get('/home', [FrontEndHome::class, 'index']);
Route::get('/products', [FrnotEndProducts::class, 'index']);
Route::get('/productdetails', [FrontEndProductDetails::class, 'index']);

//invoke
// Route::get('/invoke',InvokeController::class);

//mideleware
Route::get('/adminindex/{age}', function () {
    //
})->Middleware([CheckAge::class]);


