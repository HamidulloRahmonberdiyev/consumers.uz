<?php

use App\Http\Controllers\AdminAddressController;
use App\Http\Controllers\AdminConsumerController;
use App\Http\Controllers\AdminFilterController;
use App\Http\Controllers\AdminInformationController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminPartnerController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminQuestionController;
use App\Http\Controllers\AdminRateController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AdminSearchController;
use App\Http\Controllers\AdminTrashController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

# FRONTEND ROUTES

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('posts', [PostController::class, 'index'])->name('posts');

Route::get('informations', [InformationController::class, 'index'])->name('informations');

Route::get('rates', [RateController::class, 'index'])->name('rates');


# BACKEND ROUTES

Auth::routes();

Route::prefix('admin')->group(function() {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('search', [AdminSearchController::class, 'search'])->name('search');
    Route::get('consumer/search', [AdminSearchController::class, 'consumers_search'])->name('consumers.search');
    Route::get('trashed/search', [AdminSearchController::class, 'trashed_search'])->name('trashed.search');

    Route::get('filter', [AdminFilterController::class, 'consumers_filter'])->name('consumers.filter');
    Route::get('consumers/active', [AdminFilterController::class, 'consumers_active'])->name('consumers.active');
    Route::get('consumers/passive', [AdminFilterController::class, 'consumers_passive'])->name('consumers.passive');
    Route::get('consumers/noactive', [AdminFilterController::class, 'consumers_noactive'])->name('consumers.noactive');

    Route::get('user/settings', [UserController::class, 'settings'])->name('user.settings');
    Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user/{user}/update', [UserController::class, 'update'])->name('user.update');
    Route::get('user/{user}/password', [UserController::class, 'password'])->name('user.password');
    Route::post('user/{user}/password/update', [UserController::class, 'password_update'])->name('user.password.update');
    Route::get('user/{user}/photo', [UserController::class, 'photo'])->name('user.photo');
    Route::post('user/{user}/photo/update', [UserController::class, 'photo_update'])->name('user.photo.update');

    Route::get('trashed', [AdminTrashController::class, 'index'])->name('trashed.index');
    Route::post('trashed/restore', [AdminTrashController::class, 'restore'])->name('trashed.restore');
    Route::delete('trashed/delete', [AdminTrashController::class, 'delete'])->name('trashed.delete');
    Route::delete('trashed/deleteAll', [AdminTrashController::class, 'deleteAll'])->name('trashed.deleteAll');


    Route::resource('addresses', AdminAddressController::class);

    Route::resource('consumers', AdminConsumerController::class);

    Route::resource('posts', AdminPostController::class);

    Route::resource('informations', AdminInformationController::class);

    Route::resource('partners', AdminPartnerController::class);

    Route::resource('questions', AdminQuestionController::class);

    Route::resource('rates', AdminRateController::class);

    Route::resource('users', AdminUserController::class);

    Route::resource('roles', AdminRoleController::class);

})->middleware(['auth', 'role']);

