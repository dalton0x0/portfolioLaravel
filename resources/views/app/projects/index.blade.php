@extends('layout.app.base')

@section('title', 'Projets')

@section('content')
    <!-- Projects Section-->
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projets</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">1ere année (Stage)</h2>
                                    <p>
                                        En fin de 1ere année de BTS SIO, mon stage à <a class="link-offset-1" href="https://redvi.se" target="_blank">RedVise</a> été une opportunité
                                        pour moi d'apprendre de nouvelles choses et appliquer mes connaissances dans un environnement de production.
                                        Je vous invite à jetter un coup d'oeil pour en savoir plus sur mes projets réalisés.
                                    </p>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">2e année (Alternance)</h2>
                                    <p>
                                        Actuellement alternant à l'école <a href="https://www.iticparis.com" target="_blank">ITIC Paris</a>,
                                        'apprends au jour le jour avec de nouveaux projets tantôt en réseau, tantôt en système.
                                        Je vous laisse découvrir l'ensemble de mes projets que j'ai mis à dispositon sur ce site.
                                    </p>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Informatiser pour mieux gérer !</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('contact') }}">Me contatcer</a>
            </div>
        </div>
    </section>
@endsection
