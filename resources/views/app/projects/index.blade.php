@extends('layouts.app.base')

@section('title', 'Mes expériences professionnelles')

@section('content')
    <!-- Section des projets-->
    <section class="py-5">
        <div class="container px-4">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">@yield('title')</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card  rounded-4 shadow">
                                <img class="img-fluid p-2" src="{{ asset('assets/images/projects/logo-redvise.png') }}"
                                     alt="Tunnel EOIP MikroTik"/>
                                <div class="card-body">
                                    <h4 class="card-title">1<sup>re</sup> année : Stage</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mt-3">
                                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                               href="{{ route('projects.internships.index') }}">Voir
                                            </a>
                                        </div>
                                        <small class="text-body-secondary">Redvise Ltd</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2" src="{{ asset('/assets/images/projects/logo-itic.png') }}"
                                     alt="Tunnel EOIP MikroTik"/>
                                <div class="card-body">
                                    <h4 class="card-title">2<sup>e</sup> année : Alternance</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mt-3">
                                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                               href="{{ route('projects.apprenticeships.index') }}">Voir
                                            </a>
                                        </div>
                                        <small class="text-body-secondary">ITIC Paris</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5">
        <div class="container px-4">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projets BTS</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card rounded-4 shadow">
                                <img class="img-fluid p-2" src="{{ asset('assets/images/projects/cover-systeme.png') }}"
                                     alt="Tunnel EOIP MikroTik"/>
                                <div class="card-body">
                                    <h4 class="card-title">Système</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mt-3">
                                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                               href="{{ route('projects.system.index') }}">Voir
                                            </a>
                                        </div>
                                        <small class="text-body-secondary">Linux</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2" src="{{ asset('/assets/images/projects/cover-reseau.png') }}"
                                     alt="Tunnel EOIP MikroTik"/>
                                <div class="card-body">
                                    <h4 class="card-title">Réseau</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mt-3">
                                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                               href="{{ route('projects.network.index') }}">Voir
                                            </a>
                                        </div>
                                        <small class="text-body-secondary">MikroTik</small>
                                    </div>
                                </div>
                            </div>
                        </div>
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
@endsection
