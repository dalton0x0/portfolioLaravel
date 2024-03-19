<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\ContactFormRequest;
use App\Mail\ContactSendMail;
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

    public function contact (ContactFormRequest $request)
    {
        $contact = $request->all();
        Mail::to($request->email)->send(new ContactSendMail($request->validated()));
        return back()->with('success', "Merci ! J'ai bien reçu votre message !");
    }
}
