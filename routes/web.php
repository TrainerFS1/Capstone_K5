<?php

use App\Http\Controllers\IncomeController;
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
    return view('Landing Page.index');
});

Route::get('/fitur', function () {
    return view('Landing Page.fitur');
});

Route::get('/about', function () {
    return view('Landing Page.about');
});

Route::get('/contact', function () {
    return view('Landing Page.contact');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/income', [IncomeController::class, 'index'])->name('index.income');
Route::get('/form-income', [IncomeController::class, 'create'])->name('create.income');
Route::post('/store-income', [IncomeController::class, 'store'])->name('store.income');
Route::get('/edit-income/{id}', [IncomeController::class, 'edit'])->name('edit.income');
Route::delete('/delete-income/{id}', [IncomeController::class, 'destroy'])->name('delete.income');
Route::put('/update-income/{id}', [IncomeController::class, 'update'])->name('update.income');
