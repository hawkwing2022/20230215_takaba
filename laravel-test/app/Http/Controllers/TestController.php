<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function site($room)
    {
        $item = ['box' => '部屋番号は'.$room.'です'];
        return view('site', $item);
    }
}
