<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectFormRequest;
use App\Models\Admin\Project;

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
        $input = $request->all();

        if ($request->hasfile('cover')) {
            $cover = $request->file('cover');
            $coverName = date('YmdHis') . "." . $cover->getClientOriginalExtension();
            $destinationPath = storage_path('public/covers');
            $cover->move($destinationPath, $coverName);
            $input['cover'] = $coverName;
        }

        Project::create($input);

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
        $input = $request->all();

        if ($cover = $request->file('cover')) {
            $destinationPath = app_path('public/covers');
            $coverName = date('YmdHis') . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $coverName);
            $input['cover'] = $coverName;
        } else {
            unset($project['cover']);
        }

        $project->update($input);

        return to_route('admin.projects.index')->with('success', 'Le projet a été modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return to_route('admin.projects.index')->with('danger', "Le projet a été supprimé avec succès");
    }
}
