<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectFormRequest;
use App\Models\Admin\Category;
use App\Models\Admin\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.projects.index', [
            'projects' => Project::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();

        return view('admin.projects.form', [
            'project' =>$project,
            'categories' => Category::select('id', 'name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectFormRequest $request, Project $project)
    {
        $project = Project::create($this->extractData(new Project(), $request));
        return to_route('admin.projects.index')->with('success', 'Le projet a été crée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return response()->file(storage_path("app/public/").$project->report);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.form', [
            'project' => $project,
            'categories' => Category::select('id', 'name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectFormRequest $request, Project $project)
    {
        $project->update($this->extractData($project, $request));
        return to_route('admin.projects.index')->with('success', 'Le projet a été modifié avec succès !');
    }

    private function extractData(Project $project, ProjectFormRequest $request) : array
    {
        $data = $request->validated();
        $cover = $request->validated('cover');
        $report = $request->validated('report');
        $project->category_id = $request->validated('category_id');
        if ($cover == null || $cover->getError()) {
            return $data;
        }
        elseif ($report == null || $report->getError()) {
            return $data;
        }
        elseif ($project->cover) {
            Storage::disk('public')->delete($project->cover);
        }
        elseif ($project->report) {
            Storage::disk('public')->delete($project->report);
        }
        $data['cover'] = $cover->store('covers', 'public');
        $data['report'] = $report->store('reports', 'public');
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->cover) {
            Storage::disk('public')->delete($project->cover);
        }
        if ($project->report) {
            Storage::disk('public')->delete($project->report);
        }
        $project->delete();
        return to_route('admin.projects.index')->with('danger', "Le projet a été supprimé avec succès");
    }
}
