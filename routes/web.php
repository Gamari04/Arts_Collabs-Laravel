<?php

use App\Http\Controllers\ArtProjectController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowDetailsController;
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

Route::get('/project',[ArtProjectController::class, 'index'])->name('project');
Route::post('/project/store', [ArtProjectController::class, 'store'])->name('store');
Route::delete('/project/{user}', [ArtProjectController::class, 'destroy'])->name('.destroy');
Route::get('/project/{user}/edit', [ArtProjectController::class, 'edit'])->name('.edit');
Route::put('/project/{user}', [ArtProjectController::class, 'update'])->name('.update');


Route::get('/details',[ShowDetailsController::class, 'index']);


//routes pf partners

Route::get('/partner',[PartnerController::class, 'index'])->name('partner');
Route::post('/partner/store', [PartnerController::class, 'store'])->name('partner.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
