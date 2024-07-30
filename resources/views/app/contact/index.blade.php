@extends('layouts.app.base')

@section('title', 'A propos')

@section('content')
    <section>
        <div class="container my-5">
            <!-- Formulaire de contact -->
            <div class="bg-light rounded-4 pb-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    @include('partials.flash')
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                        <a href="mailto:contact@cheridanh.cg">@include('partials.icon', ['class' => 'bi-envelope text-white'])</a>
                    </div>
                    <h1 class="fw-bolder">Contact</h1>
                    <p class="lead fw-normal text-muted mb-0">Me laisser un message ?</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form action="{{ route('contactForm') }}" method="post">
                            @csrf
                            @include('partials.input', ['name' => 'name', 'label' => 'Nom complet', 'placeholder' => 'Entrer votre nom'])
                            @include('partials.input', ['name' => 'email', 'label' => 'Email', 'placeholder' => 'Entrer votre adresse email'])
                            @include('partials.input', ['type' => 'textarea','name' => 'message', 'label' => 'Message', 'placeholder' => 'Entrer votre message'])
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit">Envoyer @include('partials.icon', ['class' => 'bi-send'])</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
