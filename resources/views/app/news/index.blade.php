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
                        <div class="card-body p-4">
                            <div>
                                <div class="d-flex align-items-center mb-4">
                                    <h3 class="fw-bolder mb-0">
                                        <span class="text-gradient d-inline">C'est quoi cette veille ?</span>
                                    </h3>
                                </div>
                                <div class="text-justify">
                                    <p>
                                        La veille informatique est une activité qui consiste à se tenir au courant des
                                        avancées technologiques dans le domaine de l'informatique afin de tirer parti de
                                        ses avancées le plus rapidement possible.
                                    </p>
                                    <p>
                                        La veille existe dans la plupart des métiers, cela va du garagiste qui va se
                                        tenir au courant des nouveaux problèmes, nouveaux modèles, nouvelles méthodes, à
                                        l’architecte qui va lui aussi se tenir au courant des nouveautés, que ce soit en
                                        matière de mode ou en matière de législation. Dans de nombreux métiers, cette
                                        veille est indispensable pour ne pas se retrouver rapidement larguée. Elle n’est
                                        donc pas une option dans notre métier.
                                    </p>
                                    <p>
                                        En effet, l’informatique étant en constante évolution, la veille est une partie
                                        essentielle de notre travail et peut prendre beaucoup de temps. C’est pour cela
                                        qu’il faut savoir organiser sa veille technologie pour être toujours au top sans
                                        perdre trop de temps
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-4">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        @include('partials.icon', ['class' => 'bi-apple'])
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Pass Navigo = IPhone</span></h3>
                                </div>
                                <div class="text-justify">
                                    <p>
                                        La carte bleutée en plastique sera bientôt un lointain souvenir. Depuis ce mardi
                                        21 mai, l'iPhone (depuis le modèle XS) permet enfin aux voyageurs transiliens
                                        d'avoir leur passe Navigo sur le smartphone pour valider leur titre de
                                        transport. Il est même possible de se servir de l'Apple Watch ( à partir de la
                                        Série 6) pour cela.
                                    </p>
                                    <p>
                                        Enfin, Apple et IDF Mobilités ont réussi à se mettre d’accord, afin de permettre
                                        à votre iPhone de valider votre titre de transport. Un nouvelle façon de se
                                        déplacer qui vient d’être adoptée, et qui tombe à pic, à l’orée de l’ouverture
                                        des Jeux Olympiques 2024.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Photo -->
    <section class="album pb-5 bg-body-tertiary">
        <div class="container-fluid px-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2 w-100" src="{{ asset('storage/img/news/iphone-navigo-1.png') }}" alt="Navigo"/>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2 w-100" src="{{ asset('storage/img/news/iphone-navigo-2.png') }}" alt="Navigo"/>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card shadow rounded-4">
                                <img class="img-fluid p-2 w-100" src="{{ asset('storage/img/news/iphone-navigo-3.png') }}" alt="Navigo"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-4 pb-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-4">
                            <!-- Listes des ressources -->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Avec quoi je m'informe ?</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <a class="btn d-flex align-items-center bg-light rounded-4 p-3 h-100" href="https://tldr.tech/" target="_blank">
                                            TLDR
                                        </a>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <a class="btn d-flex align-items-center bg-light rounded-4 p-3 h-100" href="https://feedly.com/" target="_blank">
                                            Feedly
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="btn d-flex align-items-center bg-light rounded-4 p-3 h-100" href="https://www.youtube.com/" target="_blank">
                                            YouTube
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
@endsection
