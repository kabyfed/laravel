<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function method1()
    {
        $title = '1';
        $content = 'content1';
        return view('method', ['title' => $title, 'content' => $content]);
    }

    public function method2()
    {
        $title = '2';
        $content = 'content2';
        return view('method', ['title' => $title, 'content' => $content]);
    }
    public function method3()
    {
        $title = '3';
        $content = 'content3';
        return view('method', ['title' => $title, 'content' => $content]);
    }
}


