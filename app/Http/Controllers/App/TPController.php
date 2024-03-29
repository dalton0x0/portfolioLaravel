<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class TPController extends Controller
{
    public function index()
    {
        return view('app.projects.tp.index');
    }
}
