@extends('layouts.app.base')

@section('title', 'Epreuve E5 : Projet Réseau')

@section('content')
    <div class="container px-4 my-5">
        <!-- Titre  -->
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Epreuve E5<br>Projet Réseau</span></h1>
        </div>
        <!-- Projet Réseau -->
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Titre -->
                <section>
                    <div class="text-center mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Mise en place d'un réseau Wi-Fi</h2>
                    </div>
                    <!-- Contexte -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5">
                                <div class="col">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                            @include('partials.icon', ['class' => 'bi-file-text'])
                                        </div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Contexte</span></h3>
                                    </div>
                                    <p class="text-justify">
                                        Dans le cadre de l'amélioration de ses infrastructures informatiques, la Maison des Ligues (M2L) a entrepris la
                                        mise en place d'un réseau sans fil (Wi-Fi) pour répondre aux besoins croissants de connectivité de ses
                                        utilisateurs. Ce réseau sans fil est conçu pour connecter plusieurs VLANs distincts, chacun dédié à un groupe
                                        spécifique d'utilisateurs ou à des services particuliers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Topologie -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5">
                                <div class="col">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                            @include('partials.icon', ['class' => 'bi-diagram-3'])
                                        </div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Topologie</span></h3>
                                    </div>
                                    <img class="img-fluid p-2" src="{{ asset('storage/img/network/topologie-reseau.png') }}" alt="Topologie réseau"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ressources -->
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-4">
                            <!-- Listes des ressources -->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        @include('partials.icon', ['class' => 'bi-pin'])
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Ressources</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <a class="btn d-flex align-items-center bg-light rounded-4 p-3 h-100" href="{{ route('projects.network.sheet') }}"  target="_blank">
                                            Fiche projet réseau
                                        </a>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <a class="btn d-flex align-items-center bg-light rounded-4 p-3 h-100" href="{{ route('projects.network.ap') }}" target="_blank">
                                            Partie A : Access Point
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="btn d-flex align-items-center bg-light rounded-4 p-3 h-100" href="{{ route('projects.network.multiple-ssid') }}" target="_blank">
                                            Partie B : AP multiple SSID
                                        </a>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <a class="btn d-flex align-items-center bg-light rounded-4 p-3 h-100" href="{{ route('projects.network.station') }}" target="_blank">
                                            Partie C : Station Wifi
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Fin Projet Réseau -->
            </div>
        </div>
        <!-- Fin -->
    </div>
@endsection
