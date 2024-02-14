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

//Routes for profile edit
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

//Routs for admin
Route::middleware(['auth','role:super-user'])->group(function (){
    //Creating owners
    Route::resource('roles', \App\Http\Controllers\RoleController::class)->middleware('role:super-user');
    Route::post('/admin/users/create', [AdminUsersCreateController::class, 'createUser'])->name('admin.user.create');
    //Show users
    Route::get('users', [AdminUsersCreateController::class,'ShowUsers'])->name('users');
    Route::get('user/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('user');
    //Create apartaments
    Route::get('/apartament/create',[\App\Http\Controllers\AdminApartamentCreateController::class, 'index'])->middleware('role:super-user')->name('apartament');
    Route::get('/apartament/show',[\App\Http\Controllers\AdminApartamentCreateController::class, 'show'])->middleware('role:super-user')->name('apartament.show');
    Route::post('/apartament/create',[\App\Http\Controllers\AdminApartamentCreateController::class, 'store'])->middleware('role:super-user')->name('apartament.store');
    Route::get('apartment/{id}', [\App\Http\Controllers\ApartmentController::class, 'show'])->name('apartment.show');

    Route::get('cost',function (){
        return view('cost');
    })->middleware(['auth','role:super-user'])->name('cost');
});

Route::middleware(['auth','role:basic-user'])->group(function (){

});

Route::middleware(['auth','role:agent-user'])->group(function (){

});

require __DIR__.'/auth.php';
