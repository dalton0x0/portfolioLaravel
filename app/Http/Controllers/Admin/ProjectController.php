<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectFormRequest;
use App\Models\Admin\Category;
use App\Models\Admin\Period;
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
            'periods' => Period::select('id', 'name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectFormRequest $request)
    {
        $data = $this->extractData(new Project(), $request);
        $project = Project::create($data);
        return to_route('admin.projects.index')->with('success', 'Le projet a été créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return response()->file(public_path("storage/").$project->report);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.form', [
            'project' => $project,
            'categories' => Category::select('id', 'name')->get(),
            'periods' => Period::select('id', 'name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectFormRequest $request, Project $project)
    {
        $data = $this->extractData($project, $request);
        $project->update($data);
        return to_route('admin.projects.index')->with('success', 'Le projet a été modifié avec succès !');
    }

    private function extractData(Project $project, ProjectFormRequest $request) : array
    {
        $data = $request->validated();
        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            if ($project->exists && $project->cover) {
                Storage::disk('public')->delete($project->cover);
            }
            $data['cover'] = $request->file('cover')->store('covers', 'public');
        } else {
            if ($project->exists) {
                $data['cover'] = $project->cover;
            }
        }
        if ($request->hasFile('report') && $request->file('report')->isValid()) {
            if ($project->exists && $project->report) {
                Storage::disk('public')->delete($project->report);
            }
            $data['report'] = $request->file('report')->store('reports', 'public');
        } else {
            if ($project->exists) {
                $data['report'] = $project->report;
            }
        }
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
