@extends('layouts.app.base')

@section('title', 'Mon parcours')

@section('content')
    <div class="container px-4 my-5">
        <!-- Titre  -->
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">@yield('title')</span></h1>
        </div>
        <!-- Experiences & Cursus -->
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experiences Professionnelless  -->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experiences Professionnelles</h2>
                        <!-- Mon CV -->
                        <a class="btn btn-primary px-4 py-3 rounded-4" href="{{ route('viewCv') }}" target="_blank">
                            @include('partials.icon', ['class' => 'd-inline-block bi-eye']) CV
                        </a>
                    </div>
                    <!-- Contenu d'une expérience -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Septembre 2023 - Aujourd'hui</div>
                                        <div class="small fw-bolder">Alternance</div>
                                        <div class="small text-muted">ITIC Paris, Paris</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Administrateur Système & Réseau</div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <h6>Missions :</h6>
                                <ul class="pt-3">
                                    <li class="pb-2">Assistance aux collaborateurs, profs et étudiants à la connexion aux services de l'entreprise</li>
                                    <li class="pb-2">Maintenance et assistance du parc informatique de l'entreprise</li>
                                    <li class="pb-2">Participer à l'évolution technique des services de l'entreprise</li>
                                    <li>Veille technologique liées aux services existants</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Contenu d'une expérience -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Mai 2023 - Juin 2023</div>
                                        <div class="small fw-bolder">Stage</div>
                                        <div class="small text-muted">RedVise, Paris</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Technicien Support Informatique</div>
                                </div>
                                <div class="pt-4">
                                    <h6>Missions :</h6>
                                    <ul class="pt-3">
                                        <li class="pb-2">Assistance des utilisateurs</li>
                                        <li class="pb-2">Inventaire du matériel informatique</li>
                                        <li class="pb-2">Câblages</li>
                                        <li class="pb-2">Test de charges</li>
                                        <li class="pb-2">Réponses aux incidents (tickets)</li>
                                        <li class="pb-2">Installation et virtualisation des serveurs</li>
                                        <li class="pb-2">Mise en place d’un serveur PXE sur MikroTik</li>
                                        <li class="pb-2">Mise en place des VPN (IPsec sur Pfsense et Eoip sur MikroTik)</li>
                                        <li class="pb-2">Inventaire avec OCS Inventory et GLPI</li>
                                        <li>Installation ZABBIX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contenu d'une expérience -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Septembre 2021 - Novembre 2022</div>
                                        <div class="small fw-bolder">CDI</div>
                                        <div class="small text-muted">DigiBOX, Brazzaville</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Technicien Système & Réseau</div>
                                </div>
                                <div class="pt-4">
                                    <h6>Missions :</h6>
                                    <ul class="pt-3">
                                        <li class="pb-2">Gestion des utilisateurs avec Active Directory</li>
                                        <li class="pb-2">Mise en place des VPN</li>
                                        <li class="pb-2">Mise en place d’un portail captive</li>
                                        <li>Centralisation des logs Windows & Linux sur Debian avec RSyslog et LogAnalyzer</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contenu d'une expérience -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Septembre 2021 - Novembre 2022</div>
                                        <div class="small fw-bolder">Stage</div>
                                        <div class="small text-muted">DigiBOX, Brazzaville</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Technicien Système & Réseau</div>
                                </div>
                                <div class="pt-4">
                                    <h6>Missions :</h6>
                                    <ul class="pt-3">
                                        <li class="pb-2">Assurer la maintenance du parc informatique</li>
                                        <li class="pb-2">Installer et configurer les postes de travail des utilisateurs</li>
                                        <li class="pb-2">Guider et résoudre le dysfonctionnement des postes des utilisateurs</li>
                                        <li class="pb-2">Prendre le contrôle du système à distance</li>
                                        <li class="pb-2">Installer les configurations standard sur les nouveaux équipements</li>
                                    </ul>
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
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2024 - 2025</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">ITIC Paris</div>
                                            <div class="small text-muted">Paris, France</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Bachelor AIS : Administration des Infrastructures Sécurisées</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
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
                                    <div>BTS SIO : Services Informatique aux Organisations (option Réseau : SISR)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contenu d'un cursus -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
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
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-4">
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
                                    <div>Baccalauréat Scientifique (Biologie)</div>
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
