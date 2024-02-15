<?php

use App\Http\Controllers\ArtProjectController;
use App\Http\Controllers\ArtProjectUser;
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
Route::get('/homepage',[ArtProjectController::class,'showProject']);
Route::get('/homepage',[ArtProjectController::class,'showProject'])->name('home');
//routes of users
Route::middleware(['auth','checkAdmin'])->group(function () {

Route::get('/admin',[UserController::class, 'index'])->name('admin');
Route::delete('/admin/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/admin/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/admin/{user}', [UserController::class, 'update'])->name('users.update');

//routes of artProject

Route::get('/project',[ArtProjectController::class, 'index'])->name('project');
Route::post('/project/store', [ArtProjectController::class, 'store'])->name('store');
Route::delete('/project/{artProject}', [ArtProjectController::class, 'destroy'])->name('project.destroy');
Route::get('/project/{artProject}/edit', [ArtProjectController::class, 'edit'])->name('project.edit');
Route::put('/project/{artProject}', [ArtProjectController::class, 'update'])->name('project.update');



Route::get('/details{artProject}',[ArtProjectController::class, 'show'])->name('details');

Route::post('assign/{artProject}',[ArtProjectUser::class, 'store'])->name('assign');


//routes pf partners

Route::get('/partner',[PartnerController::class, 'index'])->name('partner');
Route::post('/partner/store', [PartnerController::class, 'store'])->name('partner.store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/project',[ArtProjectController::class, 'index'])->name('project');
Route::get('/details2/{artProject}',[ArtProjectController::class, 'details'])->name('details2');
Route::post('/collaborate/{user}', [ArtProjectController::class, 'collaborate'])->name('collaborate');
Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
