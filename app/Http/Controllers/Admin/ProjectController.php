<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectFormRequest;
use App\Models\Admin\Project;
use Illuminate\Support\Facades\File;
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
        $data = $request->validated();
        $cover = $request->validated('cover');
        $data['cover'] = $cover->store('covers', 'public');
        $project = Project::create($request->validated());

        /*
        $input = $request->all();

        if ($request->hasfile('cover')) {
            $file = $request->file('cover');
            $coverName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/covers/', $coverName);

            $project = Project::create([
                'title' => $input['title'],
                'content' => $input['content'],
                'cover' => $coverName,
            ]);
        }
        */

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
        $data = $request->validated();
        $cover = $request->validated('cover');
        if ($cover !== null && !$cover->getError()) {
            $data['cover'] = $cover->store('covers', 'public');
        }
        $project->update($data);

        /*
        if ($request->hasfile('cover')) {
            $file = $request->file('cover');
            $project->cover = time() . '-' . $file->getClientOriginalName();
            if (Storage::exists('/cover/' . $project->cover)) {
                Storage::delete('/cover/' . $project->cover);
            }
            $file->move(public_path() . '/covers/', $project->cover);
            $request['cover'] = $project->cover;

            $project->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'cover' => $project->cover,
            ]);
        }
        */
        return to_route('admin.projects.index')->with('success', 'Le projet a été modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if (Storage::exists('/cover/' . $project->cover)) {
            Storage::delete('/cover/' . $project->cover);
        }

        $project->delete();
        return to_route('admin.projects.index')->with('danger', "Le projet a été supprimé avec succès");
    }
}
