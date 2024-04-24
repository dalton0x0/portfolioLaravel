<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectFormRequest;
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
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectFormRequest $request)
    {
        $project = Project::create($this->extractData(new Project(), $request));
        return to_route('admin.projects.index')->with('success', 'Le projet a été crée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.form', [
            'project' => $project
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
        if ($cover == null || $cover->getError()) {
            return $data;
        }
        if ($project->cover) {
            Storage::disk('public')->delete($project->cover);
        }
        $data['cover'] = $cover->store('covers', 'public');
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
        $project->delete();
        return to_route('admin.projects.index')->with('danger', "Le projet a été supprimé avec succès");
    }
}
