<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\TestController;
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

$uri2 = '/homeWork1';
Route::get($uri2, [TestController::class, 'testGet']);
Route::post($uri2, [TestController::class, 'testPost']);
Route::delete($uri2, [TestController::class, 'testDelete']);
Route::put($uri2, [TestController::class, 'testPut']);
Route::patch($uri2, [TestController::class, 'testPatch']);
Route::options($uri2, [TestController::class, 'testOptions']);

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

Route::get('posts/{postId}/{title}', function (int $postId, string $title) {
    var_dump($title);
    dd($postId);
});

// Route::get('users/{login?}', function (string $login = null) {
// Route::get('users/{login?}', function (string $login = 'Wojtaszko') {
//     dd($login);
// });

Route::get('users/{login?}', function (string $login) {
    dump($login);
})->where(['login' => '[a-z0-9]+']);
// na każdy parametr możemy nałożyć regułę, a parametry to nic innego jak wyrażenia regularne (regex)


// named routes here
Route::get('items', function () {
    return 'Items';
})->name('shop.items');

Route::get('elements/{id}', function (int $id) {
    return 'Element: ' . $id;
})->name('shop.singleItem');

Route::get('route-name-call', function () {
    // $url = route('shop.items');
    $url = route('shop.singleItem', ['id' => 666]);
    dump($url);
});
