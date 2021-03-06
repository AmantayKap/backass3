<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
Route::get('/graph', function () {
    return view('graphicCard');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/redirect',[HomeController::class, 'redirect']);

Route::get('/product', [AdminController::class, 'product']);
<<<<<<< HEAD
Route::get('/showproduct', [AdminController::class, 'showproduct']);
Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);
Route::get('/updateview/{id}', [AdminController::class, 'updateview']);
Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);
Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
Route::get('/search', [HomeController::class, 'search']);
Route::post('/addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/showcart', [HomeController::class, 'showcart']);
Route::get('/delete/{id}', [HomeController::class, 'deletecart']);
Route::post('/order', [HomeController::class, 'confirmorder']);
Route::get('/showorder', [AdminController::class, 'showorder']);
Route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);
=======
Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
>>>>>>> 820417d8299bee9fd380e968fd6704573fb3e3c9
