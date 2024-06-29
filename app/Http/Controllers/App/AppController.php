<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\ContactFormRequest;
use App\Mail\ContactSendMail;
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
        $period = Period::where('name', 'like', 'Stage')->firstOrFail();
        $projects = Project::where('period_id', $period->id)
            ->with('category')
            ->get()
            ->groupBy('category.name');
        return view('app.projects.internship.index', [
            'period' => $period,
            'projects' => $projects,
        ]);
    }
    public function apprenticeship()
    {
        $period = Period::where('name', 'like', 'Alternance')->firstOrFail();
        $projects = Project::where('period_id', $period->id)
            ->with('category')
            ->get()
            ->groupBy('category.name');
        return view('app.projects.apprenticeship.index', [
            'period' => $period,
            'projects' => $projects,
        ]);
    }
    public function formation()
    {
        $period = Period::where('name', 'like', 'Formation')->firstOrFail();
        $projects = Project::where('period_id', $period->id)
            ->with('category')
            ->get()
            ->groupBy('category.name');
        return view('app.projects.formation.index', [
            'period' => $period,
            'projects' => $projects,
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
