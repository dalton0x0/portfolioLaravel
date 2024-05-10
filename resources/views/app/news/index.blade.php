@extends('layouts.app.base')

@section('title', 'Veille Technologique')

@section('content')
    <section>
        <div class="container px-4 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">@yield('title')</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div>
                                <div class="d-flex align-items-center mb-4">
                                    <h3 class="fw-bolder mb-0">
                                        <span class="text-gradient d-inline">@include('partials.icon', ['class' => 'bi-apple'])Le pass Navigo bientôt intégré à l’iPhone</span>
                                    </h3>
                                </div>
                                <p>
                                    Après des années de discussions avec Apple et des développements techniques plus
                                    longs que prévus, les iPhones vont bientôt pouvoir intégrer le Pass Navigo.
                                    Concrètement, si tout va bien, d’ici fin mai, les abonnés des transports franciliens
                                    pourront non seulement télécharger leur titre de transport avec leur iPhone (ce
                                    qu’ils pouvaient déjà faire depuis 2021) mais aussi passer les portiques grâce à
                                    leur smartphone. Soit quelques semaines avant les Jeux olympiques.
                                </p>
                                <p>
                                    Principale cause du retard, le verrouillage par Apple de la technologie NFC qui
                                    permet le sans contact et de communiquer avec les bornes de validation. Un accord a
                                    finalement été signée par IDFM en 2022 après plus de trois ans de négociations.
                                    21 millions d’achats de titre de transport ont été effectués directement via des
                                    smartphones au cours des cinq dernières années, majoritairement (61 %) par des
                                    utilisateurs d’iPhones, indique IDFM.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Expérience Pro -->
    <section class="album pb-5 bg-body-tertiary">
        <div class="container px-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2 w-100" src="{{ asset('storage/img/news/navigo-1.jpeg') }}" alt="Navigo"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2 w-100" src="{{ asset('storage/img/news/navigo-3.jpg') }}" alt="Navigo"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2 w-100" src="{{ asset('storage/img/news/navigo-2.jpg') }}" alt="Navigo"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2 w-100" src="{{ asset('storage/img/news/navigo-4.jpg') }}" alt="Navigo"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2 w-100" src="{{ asset('storage/img/news/navigo-5.png') }}" alt="Navigo"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2 w-100" src="{{ asset('storage/img/news/watch.jpg') }}" alt="Navigo"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
