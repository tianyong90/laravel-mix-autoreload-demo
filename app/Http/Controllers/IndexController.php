<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexHmr()
    {
        return view('index-hmr');
    }

    public function indexBs()
    {
        return view('index-bs');
    }

    public function indexLivereloadr()
    {
        return view('index-livereload');
    }
}
