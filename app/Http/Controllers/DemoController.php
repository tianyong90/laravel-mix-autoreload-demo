<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function hmr()
    {
        return view('demo-hmr');
    }

    public function bs()
    {
        return view('demo-bs');
    }

    public function livereload()
    {
        return view('demo-livereload');
    }
}
