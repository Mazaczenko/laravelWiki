<?php

use App\Http\Controllers\HelloController;
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

Route::get('/hello/{name}/{title}/{text}', [HelloController::class,'hello']);

$uri = '/example';
Route::get($uri, fn() => 'get arrow function');
Route::post($uri, fn() => 'post arrow function');
Route::put($uri, fn() => 'put arrow function');
Route::patch($uri, fn() => 'patch arrow function');
Route::delete($uri, fn() => 'delete arrow function');
Route::options($uri, fn() => 'options arrow function');

Route::match(['get', 'post'], '/match', fn() => 'jestem getem i postem');

Route::any('/all', fn() => 'wszystkie metody');

Route::view(
        '/view/route/var1',
        'route.param',
        [
            'param1' => 'var1 to nasze dane',
            'name' => 'Wojtek'
        ]
    );
