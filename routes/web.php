<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//      return view('welcome');
// });
Route::get('login', function () {return view('login');});
Route::get('/welcome', function () {return view('welcome');});
Route::prefix('admin')->group(function () {Route::get('/dashboard', function () {return 'Admin Dashboard';});
Route::get('/users', function () {return 'Admin Users';});});
Route::get('/user/{id}', function ($id) {return 'User dengan ID '. $id;});
// Route::get('/listbarang/{id}/{nama}', function ($id,$nama) {
//    return view('list_barang', compact('id', 'nama'));
// });
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/refresh-data', [DashboardController::class, 'refreshData']);
Route::get('listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/dataku', [DataController::class, 'tampilkan']);
