<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUsersCreateController;

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
})->middleware();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('cost',function (){
        return view('cost');
    })->middleware(['auth','role:super-user'])->name('cost');

    Route::post('/admin/users/create', [AdminUsersCreateController::class, 'createUser'])->name('admin.user.create');
    Route::resource('roles', \App\Http\Controllers\RoleController::class)->middleware('role:super-user');
    Route::get('users', [AdminUsersCreateController::class,'ShowUsers'])->name('users');
    Route::get('user/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('user');
});

require __DIR__.'/auth.php';
