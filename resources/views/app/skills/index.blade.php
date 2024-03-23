@extends('layouts.app.base')

@section('title', 'Mes compétences')

@section('content')
    <section>
        <div class="container px-4 my-5">
            <!-- Titre -->
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">@yield('title')</span></h1>
            </div>
            <!-- Compétences -->
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <!-- Listes des compétences en Systeme & Réseau -->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        @include('partials.icon', ['class' => 'bi-tools'])
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Systeme & Réseau</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Windows Server</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Linux (Debian)</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">OCS, GLPI, ZABBIX</div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Firewall Pfsense</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Configuration Switch & Routeur</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Cisco & MikroTik</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Liste des compétences en Dev -->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        @include('partials.icon', ['class' => 'bi-code-slash'])
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Developpement informatique</span>
                                    </h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Bootstrap</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Java (Notion)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin compétences -->
        </div>
    </section>
@endsection
