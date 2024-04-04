<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ProjectNetworkController extends Controller
{
    public function index () {
        return view('app.projects.network.index');
    }
}
