<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ApprenticeshipsController extends Controller
{
    public function index ()
    {
        return view('app.projects.apprenticeships.index');
    }
}
