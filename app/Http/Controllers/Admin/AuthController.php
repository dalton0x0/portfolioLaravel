<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AuthFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        /*
        User::create([
            'name' => 'admin-portfolio',
            'email' => 'admin-portfolio@cheridanh.cg',
            'password' => Hash::make('Kethur@1122-Admin')
        ]);
        */
        return view('admin.home.login');
    }
    public function doLogin(AuthFormRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.index'));
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrects'
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login')->with('success', 'Vous êtes déconnecté');
    }
}
