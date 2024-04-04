<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ProjectSystemController extends Controller
{
    public function index () {
        return view('app.projects.system.index');
    }
}
