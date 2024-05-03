@extends('layouts.app.base')

@section('title', 'Mes expériences professionnelles')

@section('content')
    @foreach($periods as $period)
        <section class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $period->name }}</span></h1>
                </div>
                <div class="justify-content-center row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($period->projects as $project)
                        <div class="col">
                            @include('partials.card-project')
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach
    {{--
    <!-- Section Expériences Professionnelles -->
    <section class="py-5">
        <div class="container px-4">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">@yield('title')</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        @include('partials.card', [
                            'class' => 'col-md-6 mb-3' ,
                            'cover' => 'projects/logo-redvise.png',
                            'title' => '1<sup>re</sup> année : Stage',
                            'path' => 'internships.index',
                            'category' => 'Redvise Ltd'
                        ])
                        @include('partials.card', [
                            'class' => 'col-md-6 mb-3' ,
                            'cover' => 'projects/logo-itic.png',
                            'title' => '2<sup>e</sup> année : Alternance',
                            'path' => 'apprenticeships.index',
                            'category' => 'ITIC Paris'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Projets BTS -->
    <section class="pb-5">
        <div class="container px-4">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projets BTS</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        @include('partials.card', [
                            'class' => 'col-md-6 mb-3' ,
                            'cover' => 'projects/cover-reseau.png',
                            'title' => 'Système',
                            'path' => 'system.index',
                            'category' => 'Linux'
                        ])
                        @include('partials.card', [
                            'class' => 'col-md-6 mb-3' ,
                            'cover' => 'projects/cover-systeme.png',
                            'title' => 'Réseau',
                            'path' => 'network.index',
                            'category' => 'MikroTik'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Projets en cours ! -->
    <section class="pb-5">
        <div class="container px-4">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projets en cours de formation</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        @include('partials.card', [
                            'class' => 'col-md-6 offset-md-3 mb-3' ,
                            'cover' => 'projects/cover-tp-formation.png',
                            'title' => 'Formation BTS',
                            'path' => 'tp.index',
                            'category' => 'Année 1 & 2'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- un slogan -->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Informatiser pour mieux gérer !</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('about') }}">Me
                    contacter</a>
            </div>
        </div>
    </section>
    --}}
@endsection
