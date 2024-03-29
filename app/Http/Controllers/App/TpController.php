<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class TpController extends Controller
{
    public function index()
    {
        return view('app.projects.tp.index');
    }
}
