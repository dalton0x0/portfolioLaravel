<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home.index', [
            'projects' => Project::all(),
        ]);
    }
}
