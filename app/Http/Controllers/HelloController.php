<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(string $name)
    {
        dump($name);
        return view('Hello.hello', ['name' => $name]);
    }
}
