<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Period;
use App\Models\Admin\Project;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home.index', [
            'projects' => Project::all(),
            'categories' => Category::all(),
            'periods' => Period::all(),
        ]);
    }
}
