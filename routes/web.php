<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inventori', function () {
    return view('inventori');
});

Route::get('/dafkomputer', function () {
    return view('dafKomputer');
});

Route::get('/tamkomputer', function () {
    return view('tamKomputer');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return Auth::user()->roles()->first()->name =='admin' ? view('dashboard') : view('dashboard1');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
