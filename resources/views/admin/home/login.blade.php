@extends('layouts.admin.base')

@section('title', 'Authentification')

@section('content')

    <div class="mt-4 container w-25">
        @include('partials.flash')
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Se connecter</span></h1>
        </div>
        <form action="{{ route('doLogin') }}" method="post" class="vstack gap-3">
            @csrf
            @include('partials.input', ['type' => 'email', 'name' => 'email', 'label' => 'Email', 'class' => 'col'])
            @include('partials.input', ['type' => 'password', 'name' => 'password', 'label' => 'Mot de passe', 'class' => 'col'])
            <div>
                <button class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>

@endsection
