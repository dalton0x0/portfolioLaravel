@extends('layouts.admin.base')

@section('title', 'Administration')

@section('content')
    <section class="py-5">
        <div class="container px-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">@yield('title')</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/Tunnel-EOIP.png') }}"
                                     alt="Tunnel EOIP MikroTik"/>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Projets</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Gérer</a>
                                        </div>
                                        <small class="text-body-secondary">Total : {{ $projects->count() }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/Tunnel-EOIP.png') }}"
                                     alt="Tunnel EOIP MikroTik"/>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Catégories</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                            <a class="btn btn-primary" href="{{ route('admin.categories.index') }}">Gérer</a>
                                        </div>
                                        <small class="text-body-secondary">Total : </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
