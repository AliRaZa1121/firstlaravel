<?php

use App\Http\Controllers\Account;
use App\Http\Controllers\AdminIndex;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
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
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test/{name}', [Helloname::class, 'helloname']);

//Baackend Routes//


Route::get('/dashboard ', [AdminIndex::class, 'index']);
//Products Route
Route::get('dashboard/products',[ProductsController::class, 'index']);
Route::post('/saveproducts',[ProductsController::class, 'create']);
Route::get('/editproduct/{id}',[ProductsController::class, 'edit']);
Route::post('/updateproduct',[ProductsController::class, 'update']);
Route::get('/deleteproduct/{id}',[ProductsController::class, 'delete']);
Route::get('dashboard/addproducts', function () {
    return view('backend.addproducts');
});
//Category Routes
Route::get('/dashboard/categories',[CategoriesController::class,'index']);
Route::get('dashboard/addcategory', function () {
    return view('backend.addcategory');
});
Route::post('/savecategory',[CategoriesController::class, 'create']);
Route::get('/deletecategory/{id}',[CategoriesController::class, 'delete']);
Route::get('/editcategory/{id}',[CategoriesController::class, 'edit']);
Route::post('/updatecategory',[CategoriesController::class, 'update']);

//login -- signup Route

//Route::get('/', [Account::class, 'login']);
Route::get('/', function(){
    return view('Frontend.login');
});
Route::post('/loginpost', [Account::class, 'loginpost']);
Route::get('/signup',function(){
    return view('Frontend.register');
});
Route::post('/signuppost', [Account::class, 'signuppost']);
Route::get('/logout', [Account::class, 'logout']);

// Frontend Routes//

Route::get('/contactus', [Contactus::class, 'index']);
Route::get('/home', [FrontEndHome::class, 'index']);
Route::get('/products', [FrnotEndProducts::class, 'index']);
Route::get('/productdetails', [FrontEndProductDetails::class, 'index']);

//invoke
// Route::get('/invoke',InvokeController::class);

//mideleware
// Route::get('/adminindex/{age}', function () {

// })->Middleware([CheckAge::class]);


