@extends('layouts.app.base')

@section('title', 'Mes projets')

@section('content')
    <!-- Section Projets BTS -->
    <section class="album py-5 bg-body-tertiary">
        <div class="container px-4">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projets BTS</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        @include('partials.card', [
                            'class' => 'col-md-6 mb-3' ,
                            'cover' => 'projects/cover-system.png',
                            'title' => 'Système',
                            'path' => 'system.index',
                            'category' => 'Linux'
                        ])
                        @include('partials.card', [
                            'class' => 'col-md-6 mb-3' ,
                            'cover' => 'projects/cover-network.png',
                            'title' => 'Réseau',
                            'path' => 'network.index',
                            'category' => 'MikroTik'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Expérience Pro -->
    <section class="album pb-5 bg-body-tertiary">
        <div class="container px-4">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Mes expériences professionnelles</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        @include('partials.card', [
                            'class' => 'col-md-6 mb-3' ,
                            'cover' => 'projects/logo-redvise.png',
                            'title' => 'Stage',
                            'path' => 'internship',
                            'category' => '1<sup>re</sup> année'
                        ])
                        @include('partials.card', [
                            'class' => 'col-md-6 mb-3' ,
                            'cover' => 'projects/logo-itic.png',
                            'title' => 'Alernance',
                            'path' => 'apprenticeship',
                            'category' => '2<sup>e</sup> année'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Formation -->
    <section class="album pb-5 bg-body-tertiary">
        <div class="container px-4">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projets en cours de formation</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        @include('partials.card', [
                            'class' => 'col-md-6 offset-md-3 mb-3' ,
                            'cover' => 'projects/cover-formation.png',
                            'title' => 'Formation BTS',
                            'path' => 'formation',
                            'category' => 'Année 1 & 2'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
