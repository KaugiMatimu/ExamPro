<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

route::get('/', [HomeController::class, 'index']);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/home', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

route::get('/redirect', [HomeController::class, 'redirect']);


route::get('/view_category', [AdminController::class, 'view_category']);
route::post('/add_category', [AdminController::class, 'add_category']);
route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);
route::get('/view_products', [AdminController::class, 'view_products']);
route::post('/add_products', [AdminController::class, 'add_products']); 
route::get('/show_products', [AdminController::class, 'show_products']);
route::get('/delete_products/{id}', [AdminController::class, 'delete_products']);
route::get('/update_products/{id}', [AdminController::class, 'update_products']);
route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']); 
