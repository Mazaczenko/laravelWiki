<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(Request $request)
    {
        dd($request);
        return view('users.list');
    }

    public function testShow(Request $request, int $id)
    {
        $uri = $request->path();
        $url = $request->url();
        $fullUrl = $request->fullUrl();

        $httpMethod = $request->method();

        if ($request->isMethod('post')) {
            dump('to jest post');
        }

        // users/test/11?name=tom&nick=Wojtaszko
        $all = $request->all();
        // dd($all);

        $name = $request->name;
        $lastName = $request->input('lastName', 'Kowalski');

        $game = $request->input('games');
        $game = $request->input('games.1');
        $game = $request->input('games.1.name');

        $allQuery = $request->query();
        $name = $request->query('name');
        $name = $request->query('lastName', 'Nowak');

        $expired = $request->boolean('expired');

        $hasName = $request->has('name');
        $hasParams = $request->has(['name', 'nick']);
        $hasAny = $request->hasAny(['name', 'nick1']);

        $cookies = $request->cookie('laravel_session');

        $input = $request->input();
        $query = $request->query();

        dd($input, $query);

        // dump($request);
        // dd($id);
    }

    public function testStore(Request $request)
    {
        if (!$request->isMethod('post')) {
            dump('to nie jest post');
        }

        $all = $request->all();

        $allQuery = $request->query();

        dump($allQuery);
        dd($all);
    }
}
