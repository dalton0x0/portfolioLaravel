<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\ContactFormRequest;
use App\Mail\ContactSendMail;
use App\Models\Admin\Category;
use App\Models\Admin\Period;
use App\Models\Admin\Project;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function index ()
    {
        return view('app.home.index');
    }
    public function projects ()
    {
        return view('app.projects.index');
    }
    public function internship()
    {
        return view('app.projects.internship.index', [
            'projects' => Project::all(),
            'categories' => Category::all(),
            'periods' => Period::query()->where('name','like', 'Stage')->get(),
        ]);
    }
    public function apprenticeship()
    {
        return view('app.projects.apprenticeship.index', [
            'projects' => Project::all(),
            'categories' => Category::all(),
            'periods' => Period::query()->where('name','like', 'Alternance')->get(),
        ]);
    }
    public function formation()
    {
        return view('app.projects.formation.index', [
            'projects' => Project::all(),
            'categories' => Category::all(),
            'periods' => Period::query()->where('name','like', 'Formation')->get(),
        ]);
    }
    public function trainings ()
    {
        return view('app.trainings.index');
    }
    public function skills ()
    {
        return view('app.skills.index');
    }
    public function news ()
    {
        return view('app.news.index');
    }
    public function about ()
    {
        return view('app.about.index');
    }
    public function show(string $period, string $category, Project $project)
    {
        return response()->file(public_path("storage/").$project->report);
    }
    public function contact (ContactFormRequest $request)
    {
        $contact = $request->all();
        Mail::to($request->email)->send(new ContactSendMail($request->validated()));
        return back()->with('success', "Merci ! J'ai bien reçu votre message !");
    }
}
