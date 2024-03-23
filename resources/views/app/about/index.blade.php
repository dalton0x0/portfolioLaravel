@extends('layouts.app.base')

@section('title', 'A propos')

@section('content')
    <!-- A propos -->
    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    @include('partials.flash')
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Chéridanh</span></h2>
                        <p class="lead fw-light mb-4">Administrateur Système & Réseau Junior</p>
                        <p class="text-muted">
                            Etudiant en 2e année de BTS SIO option SISR (Solutions d'Infrastructures Systèmes et
                            Réseaux) à l'école ITIC Paris,
                            j'ai une passion pour les réseaux, les systèmes informatiques et aussi le developpement
                            d'application web.
                        </p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" target="_blank" href="https://www.linkedin.com/in/cheridanhtsiela">
                                @include('partials.icon', ['class' => 'bi-linkedin'])
                            </a>
                            <a class="text-gradient" target="_blank" href="https://github.com/cheridanh">
                                @include('partials.icon', ['class' => 'bi-github'])
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section>
        <div class="container px-5">
            <!-- Formulaire de contact -->
            <div class="bg-light rounded-4 pb-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                        @include('partials.icon', ['class' => 'bi-envelope'])
                    </div>
                    <h1 class="fw-bolder">Contact</h1>
                    <p class="lead fw-normal text-muted mb-0">Me laisser un message ?</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form action="{{ route('contact') }}" method="post">
                            @csrf
                            @include('partials.input', ['name' => 'name', 'label' => 'Nom complet', 'placeholder' => 'Entrer votre nom'])
                            @include('partials.input', ['name' => 'email', 'label' => 'Email', 'placeholder' => 'Entrer votre adresse email'])
                            @include('partials.input', ['type' => 'textarea','name' => 'message', 'label' => 'Message', 'placeholder' => 'Entrer votre message'])
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
