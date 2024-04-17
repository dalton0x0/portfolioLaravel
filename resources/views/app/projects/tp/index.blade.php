@extends('layouts.app.base')

@section('title', 'TP')

@section('content')
<section class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Windows Server</span></h1>
        </div>
        <!-- Contenu Windows Server -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @include('partials.card', [
                'cover' => 'internships/home/Tunnel-EOIP.png',
                'title' => 'Active Directory & DNS',
                'description' => "Gestion des utilisateurs et résolution des noms de domaine avec Microsoft AD et DNS.",
                'path' => 'tp.windows-server.ad-ds',
                'category' => 'Windows Server'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/Tunnel-IPsec.png',
                'title' => 'Serveur DHCP',
                'description' => "Attribution dynamique des configurations réseau sur des postes clients avec le service DHCP.",
                'path' => 'internships.vpn-ipsec-pfsense',
                'category' => 'Windows Server'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/OCS.png',
                'title' => 'Serveur Web IIS',
                'description' => "Mettre en place un service web interne pour la visibilté de l'entreprise et autre.",
                'path' => 'internships.ocs-inventory',
                'category' => 'Windows Server'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/PXE.png',
                'title' => 'Serveur WDS',
                'description' => "Déploiement d'images d'installtion des systèmes d'exploitation par le réseau.",
                'path' => 'internships.ocs-inventory',
                'category' => 'Windows Server'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/PXE.png',
                'title' => 'Serveur TSE',
                'description' => "Découvrez un autre moyen simple et efficace d'installer les OS par le réseau.",
                'path' => 'internships.ocs-inventory',
                'category' => 'Windows Server'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/PXE.png',
                'title' => 'Serveur VPN PPTP et L2TP',
                'description' => "Etablir une connexion distante sécurisée entre un utilisateur et les services internes de
                l'entreprise.",
                'path' => 'internships.ocs-inventory',
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
                'cover' => 'internships/home/PXE.png',
                'title' => 'Bind (DNS)',
                'description' => "Mettre en place la résolutuion des noms de domaines sur un serveur Linux.",
                'path' => 'internships.ocs-inventory',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/PXE.png',
                'title' => 'LAMP',
                'description' => "Installer Apache2, MariaDB et la dernière version de PHP sur votre serveur linux.",
                'path' => 'tp.linux.lamp',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/PXE.png',
                'title' => 'Bookstack',
                'description' => "Logiciel OpenSource nécessaire pour vos documentations sous forme de Wiki.",
                'path' => 'internships.ocs-inventory',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/PXE.png',
                'title' => 'Nextcloud',
                'description' => "Logiciel OpenSource avec interface graphique web pour l'hébergement de vos fichiers.",
                'path' => 'internships.ocs-inventory',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/PXE.png',
                'title' => 'Free IPA',
                'description' => "Système de gestion d'identité gratuit et open source.",
                'path' => 'internships.ocs-inventory',
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
                'cover' => 'internships/home/PXE.png',
                'title' => 'OCS Inventoring NG',
                'description' => "Outils d'inventoring libre OpenSource que vous pouvez utiliser pour gérer votre parc
                informatique.",
                'path' => 'internships.ocs-inventory',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/PXE.png',
                'title' => 'GLPI',
                'description' => "Logiciel libre de gestion des services informatiques et de gestion des services d'assistance.",
                'path' => 'internships.ocs-inventory',
                'category' => 'Debian'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/PXE.png',
                'title' => 'ZABBIX',
                'description' => "Logiciel libre permettant de surveiller l'état de divers services réseau, serveurs et autres.",
                'path' => 'internships.ocs-inventory',
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
                'cover' => 'internships/home/PXE.png',
                'title' => 'HRSP (CARP)',
                'description' => "Redondance de deux routeurs actifs pour assurer la haute disponibilté et la continuité des
                services.",
                'path' => 'internships.ocs-inventory',
                'category' => 'Pfsense'
            ])
            @include('partials.card', [
                'cover' => 'internships/home/PXE.png',
                'title' => 'Règle NAT',
                'description' => "Assurer la translation des adresses IP de votre réseau interne.",
                'path' => 'internships.ocs-inventory',
                'category' => 'Pfsense'
            ])
        </div>
        <!-- Fin contenu Pfsense -->
    </div>
</section>
@endsection
