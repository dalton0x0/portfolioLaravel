@extends('layout.app.base')

@section('title', 'Mes expériences professionnelles')

@section('content')
    <!-- Section des projets-->
    <section class="py-5">
        <div class="container px-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">@yield('title')</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="p-3 card rounded-4 border-0 shadow-lg">
                                <img class="img-fluid" src="{{ asset('assets/RedVise.png') }}" alt="ITIC Paris" />
                                <div class="card-body">
                                    <h3 class="fw-bolder">1ere année (Stage)</h3>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mt-3">
                                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                           href="{{ route('projects') }}">Voir
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="p-3 card rounded-4 border-0 shadow-lg">
                                <img class="img-fluid" src="{{ asset('/assets/ITIC-Paris.png') }}" alt="ITIC Paris" />
                                <div class="card-body">
                                    <h3 class="fw-bolder">2e année (Alternance)</h3>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mt-3">
                                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                           href="{{ route('projects') }}">Voir
                                        </a>
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
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('about') }}">Me contatcer</a>
            </div>
        </div>
    </section>
@endsection
