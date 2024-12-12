<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/book', [HomeController::class, 'book'])->name('book');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

Route::view('/about', 'user.about');

Route::get('/dashboard',[ DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::name("admin.")->prefix("admin")->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'adminHome'])->name('home');

    //Library
    Route::name("library.")->prefix('library')->group(function () {
        Route::get('/', [LibraryController::class, 'index'])->name('index');
        Route::get('/create', [LibraryController::class, 'create'])->name('create');
        Route::post('/create', [LibraryController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [LibraryController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [LibraryController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [LibraryController::class, 'update'])->name('update');
    });


        Route::resource('category', CategoryController::class);   //Category

        Route::resource('author', AuthorController::class);  //Author

        Route::resource('book', BookController::class);  //Book

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::name("user.")->prefix("user")->middleware(['auth', 'is_user'])->group(function () {

    // Route::view('/', 'user.index');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});
