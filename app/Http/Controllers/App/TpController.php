<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Project;

class TpController extends Controller
{
    public function index()
    {
        return view('app.projects.tp.index', [
            'projects' => Project::with('category')->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Project $project)
    {
        return response()->file(storage_path("app/public/").$project->report);
    }
}
