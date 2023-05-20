<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
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

/*
Route::get('admin/products/create', function () {
    return view('admin.products.create');
});
Route::get('admin/products', function () {
    return view('admin.products.index');
});
*/
//Dashbord Routes
Route::get('products', [ProductController::class,'index']);
Route::get('products/create', [ProductController::class,'create']);
Route::get('products/store', [ProductController::class,'store']);
Route::get('products/edit/id', [ProductController::class,'edit']);
Route::get('products/delete/id', [ProductController::class,'destory']);
Route::get('products/update/id', [ProductController::class,'update']);


Route::get('categories', [CategoryController::class,'index']);
Route::get('categories/create', [CategoryController::class,'create']);
Route::get('categories/store', [CategoryController::class,'store']);
Route::get('categories/edit/id', [CategoryController::class,'edit']);
Route::get('categories/delete/id', [CategoryController::class,'destory']);
Route::get('categories/update/id', [CategoryController::class,'update']);

//Front Page Routes
Route::get('/', [FrontController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
