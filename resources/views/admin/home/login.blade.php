@extends('layouts.admin.base')

@section('title', 'Authentification')

@section('content')

    <section>
        <div class="container pt-5">
            <!-- Formulaire de contact -->
            <div class="bg-light rounded-4 pb-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                        @include('partials.icon', ['class' => 'bi-tools text-white'])
                    </div>
                    <h1 class="fw-bolder text-gradient">Administration</h1>
                    <p class="lead fw-normal text-muted mb-0">Connexion</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form action="{{ route('doLogin') }}" method="post" class="vstack gap-3">
                            @csrf
                            @include('partials.input', ['type' => 'email', 'name' => 'email', 'label' => 'Email'])
                            @include('partials.input', ['type' => 'password', 'name' => 'password', 'label' => 'Mot de passe'])
                            <div class="d-grid">
                                <button class="btn btn-success btn-lg">Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
