@extends('layouts.app.base')

@section('title', 'Mon parcours')

@section('content')
    <div class="container my-5">
        <!-- Titre  -->
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">@yield('title')</span></h1>
        </div>
        <!-- Experiences & Cursus -->
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experiences Professionnels  -->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experiences Professionnels</h2>
                        <!-- Mon CV -->
                        <a class="btn btn-primary px-4 py-3" href="{{ asset('storage/cv-cheridanh-tsiela.pdf') }}" target="_blank">
                            @include('partials.icon', ['class' => 'bi-eye me-2'])Voir mon CV
                        </a>
                    </div>
                    <!-- Contenu d'une expérience -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Septembre 2023 - Aujourd'hui</div>
                                        <div class="small fw-bolder">Alternance</div>
                                        <div class="small text-muted">ITIC Paris, Paris</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Administrateur Système & Réseau Junior</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contenu d'une expérience -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Mai 2023 - Juin 2023</div>
                                        <div class="small fw-bolder">Stage</div>
                                        <div class="small text-muted">RedVise, Paris</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Technicien Système & Réseau</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contenu d'une expérience -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Septembre 2021 - Novembre 2022</div>
                                        <div class="small fw-bolder">CDI</div>
                                        <div class="small text-muted">DigiBOX, Brazzaville</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Technicien Support Informatique</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Cursus Scolaire -->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Cursus Scolaire</h2>
                    <!-- Contenu d'un cursus -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2023 - 2024</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">ITIC Paris</div>
                                            <div class="small text-muted">Paris, France</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>2e année BTS SIO option SISR</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contenu d'un cursus -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2018 - 2021</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Nuxell Technologies</div>
                                            <div class="small text-muted">Brazzaville, Congo</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Formation en Administration Sytème & Réseau Informatique</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contenu d'un cursus -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2017 - 2018</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Lycée Nganga Edouard</div>
                                            <div class="small text-muted">Brazzaville, Congo</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Baccalauréat Général</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contenu d'un cursus -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2014 - 2015</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Centre Scolaire Allegra</div>
                                            <div class="small text-muted">Brazzaville, Congo</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Brevet d'Etude du Premier Cycle</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Fin Cursus -->
            </div>
        </div>
        <!-- Fin Experiences & Cursus -->
    </div>
@endsection
