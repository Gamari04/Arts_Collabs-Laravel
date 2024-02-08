<?php

use App\Http\Controllers\ArtProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\ArtProject;
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
Route::get('/homepage', function () {
    return view('home');
});
//routes of users
Route::get('/admin',[UserController::class, 'index'])->name('admin');
Route::delete('/admin/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/admin/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/admin/{user}', [UserController::class, 'update'])->name('users.update');

//routes of artProject

Route::get('/project',[ArtProjectController::class, 'index'])->name('admin.project');
Route::post('/project/store', [ArtProjectController::class, 'store'])->name('store');
Route::delete('/project/{user}', [ArtProjectController::class, 'destroy'])->name('users.destroy');
Route::get('/project/{user}/edit', [ArtProjectController::class, 'edit'])->name('users.edit');
Route::put('/project/{user}', [ArtProjectController::class, 'update'])->name('users.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
