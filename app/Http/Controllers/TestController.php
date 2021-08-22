<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testGet ()
    {
        return 'jestem Get';
    }

    public function testPost ()
    {
        return 'jestem Post';
    }

    public function testPut ()
    {
        return 'jestem Put';
    }

    public function testPatch ()
    {
        return 'jestem Patch';
    }

    public function testOptions ()
    {
        return 'jestem Options';
    }

    public function testDelete ()
    {
        return 'jestem Delete';
    }

    public function testAny ()
    {
        return 'jestem Any';
    }
}
