@extends('layouts.app.base')

@section('title', 'TP')

@section('content')
    @foreach($categories as $category)
        <section class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $category->name }}</span></h1>
                </div>
                <div class="justify-content-center row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($category->projects as $project)
                        <div class="col">
                            <div class="card h-100 shadow rounded-4">
                                <img class="img-fluid p-2 w-100" src="{{ $project->getCoverUrl() }}" alt="{{ $project->title }}"/>
                                <div class="card-body">
                                    <h4 class="card-title h-50">{{ $project->title }}</h4>
                                    <p class="card-text h-50">{{ $project->description }}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                            <a class="btn btn-primary" href="#">Voir</a>
                                        </div>
                                        <small class="text-body-secondary">{{ $project->category->name }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach
<section class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Windows Server</span></h1>
        </div>
        <!-- Contenu Windows Server -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @include('partials.card', [
                'cover' => 'tp/ad-ds.png',
                'title' => 'Active Directory & DNS',
                'description' => "Gestion des utilisateurs et résolution des noms de domaine avec Microsoft AD et DNS.",
                'path' => 'tp.windows-server.ad-ds',
                'category' => 'Windows Server'
            ])
            @include('partials.card', [
                'cover' => 'tp/dhcp.png',
                'title' => 'Serveur DHCP',
                'description' => "Attribution dynamique des configurations réseau sur des postes clients avec le service DHCP.",
                'path' => 'tp.windows-server.dhcp',
                'category' => 'Windows Server'
            ])
            @include('partials.card', [
                'cover' => 'tp/iis.png',
                'title' => 'Serveur Web IIS',
                'description' => "Mettre en place un service web interne pour la visibilté de l'entreprise et autre.",
                'path' => 'tp.windows-server.iis',
                'category' => 'Windows Server'
            ])
            @include('partials.card', [
                'cover' => 'tp/wds.png',
                'title' => 'Serveur WDS',
                'description' => "Déploiement d'images d'installtion des systèmes d'exploitation par le réseau.",
                //'path' => 'tp.windows-server.wds',
                'category' => 'Windows Server'
            ])
            @include('partials.card', [
                'cover' => 'tp/tse.png',
                'title' => 'Serveur TSE',
                'description' => "Découvrez un autre moyen simple et efficace d'installer les OS par le réseau.",
                //'path' => 'tp.windows-server.tse',
                'category' => 'Windows Server'
            ])
            @include('partials.card', [
                'cover' => 'tp/vpn.png',
                'title' => 'Serveur VPN PPTP et L2TP',
                'description' => "Etablir une connexion distante sécurisée entre un utilisateur et les services internes de
                l'entreprise.",
                'path' => 'tp.windows-server.vpn',
                'category' => 'Windows Server'
            ])
        </div>
        <!-- Fin contenu Windows Server -->
    </div>
</section>
<section class="album pb-5 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Linux</span></h1>
        </div>
        <!-- Contenu Linux -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @include('partials.card', [
                'cover' => 'tp/bind.png',
                'title' => 'Bind (DNS)',
                'description' => "Mettre en place la résolutuion des noms de domaines sur un serveur Linux.",
                //'path' => 'tp.linux.bind',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'tp/lamp.png',
                'title' => 'LAMP',
                'description' => "Installer Apache2, MariaDB et la dernière version de PHP sur votre serveur linux.",
                'path' => 'tp.linux.lamp',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'tp/bookstack.png',
                'title' => 'Bookstack',
                'description' => "Logiciel OpenSource nécessaire pour vos documentations sous forme de Wiki.",
                //'path' => 'tp.linux.bookstack',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'tp/nextcloud.png',
                'title' => 'Nextcloud',
                'description' => "Logiciel OpenSource avec interface graphique web pour l'hébergement de vos fichiers.",
                //'path' => 'tp.linux.nextcloud',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'tp/free-ipa.png',
                'title' => 'Free IPA',
                'description' => "Système de gestion d'identité gratuit et open source.",
                //'path' => 'tp.linux.free-ipa',
                'category' => 'Rocky Linux'
            ])
        </div>
        <!-- Fin contenu Linux -->
    </div>
</section>
<section class="album pb-5 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Inventoring et Monitoring</span></h1>
        </div>
        <!-- Contenu Inventoring et Monitoring -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @include('partials.card', [
                'cover' => 'tp/ocs.png',
                'title' => 'OCS Inventoring NG',
                'description' => "Outils d'inventoring libre OpenSource que vous pouvez utiliser pour gérer votre parc
                informatique.",
                //'path' => 'tp.inventoring-monitoring.ocs',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'tp/glpi.png',
                'title' => 'GLPI',
                'description' => "Logiciel libre de gestion des services informatiques et de gestion des services d'assistance.",
                'path' => 'tp.inventoring-monitoring.glpi',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'tp/zabbix.png',
                'title' => 'ZABBIX',
                'description' => "Logiciel libre permettant de surveiller l'état de divers services réseau, serveurs et autres.",
                'path' => 'tp.inventoring-monitoring.zabbix',
                'category' => 'Debian'
            ])
        </div>
        <!-- Fin contenu Inventoring et Monitoring -->
    </div>
</section>
<section class="album pb-5 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Pfsense</span></h1>
        </div>
        <!-- Contenu Pfsense -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @include('partials.card', [
                'cover' => 'tp/carp.png',
                'title' => 'HRSP (CARP)',
                'description' => "Redondance de deux routeurs actifs pour assurer la haute disponibilté et la continuité des
                services.",
                //'path' => 'tp.pfsense.carp',
                'category' => 'Pfsense'
            ])
            @include('partials.card', [
                'cover' => 'tp/pfsense.png',
                'title' => 'Règle NAT',
                'description' => "Assurer la translation des adresses IP de votre réseau interne.",
                //'path' => 'tp.pfsense.nat',
                'category' => 'Pfsense'
            ])
        </div>
        <!-- Fin contenu Pfsense -->
    </div>
</section>
@endsection
