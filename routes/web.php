<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\User\ShowAddress;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('users', [UserController::class, 'list'])
    ->name('get.users');

Route::get('users/{id}', [ProfileController::class, 'show']);

// Single action controller
Route::get('users/{id}/address', ShowAddress::class);

Route::resource('games', GameController::class)
    ->only([
        'index', 'show'
    ]);

Route::resource('admin/games', GameController::class)
    ->only([
        'store', 'create', 'destroy'
    ]);
