@extends('layouts.app.base')

@section('title', 'TP')

@section('content')
<section class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Windows Server</span></h1>
        </div>
        <!-- Contenu internships -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/Tunnel-EOIP.png') }}"
                         alt="Tunnel EOIP MikroTik"/>
                    <div class="card-body">
                        <h4 class="card-title">Active Directory & DNS</h4>
                        <p class="card-text">
                            Interconnection de deux sous réseaux différents avec DHCP distant sans utiliser de
                            relais DHCP.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.tunnel-eoip-ipsec') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Windows Server</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/Tunnel-IPsec.png') }}"
                         alt="VPN IPsec Pfsense"/>
                    <div class="card-body">
                        <h4 class="card-title">Serveur DHCP</h4>
                        <p class="card-text">
                            Un routeur firewall puissant et simple d'utilisation pour tous vos besoins en
                            administration réseau.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.vpn-ipsec-pfsense') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Windows Server</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/OCS.png') }}"
                         alt="OCS Inventory NG"/>
                    <div class="card-body h-100">
                        <h4 class="card-title">Serveur Web IIS</h4>
                        <p class="card-text">
                            Outils d'inventoring libre OpenSource que vous pouvez utiliser pour gérer votre parc
                            informatique.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.ocs-inventory') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Windows Server</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/PXE.png') }}"
                         alt="PXE MikroTik"/>
                    <div class="card-body">
                        <h4 class="card-title">Serveur WDS</h4>
                        <p class="card-text">
                            Découvrez un autre moyen simple et efficace d'installer les OS par le réseau.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.pxe-mikrotik') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Windows Server</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/PXE.png') }}"
                         alt="PXE MikroTik"/>
                    <div class="card-body">
                        <h4 class="card-title">Serveur TSE</h4>
                        <p class="card-text">
                            Découvrez un autre moyen simple et efficace d'installer les OS par le réseau.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.pxe-mikrotik') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Windows Server</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/PXE.png') }}"
                         alt="PXE MikroTik"/>
                    <div class="card-body">
                        <h4 class="card-title">Serveur VPN PPTP et L2TP</h4>
                        <p class="card-text">
                            Découvrez un autre moyen simple et efficace d'installer les OS par le réseau.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.pxe-mikrotik') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Windows Server</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin contenu internships -->
    </div>
</section>
<section class="album pb-5 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Linux</span></h1>
        </div>
        <!-- Contenu internships -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/Tunnel-EOIP.png') }}"
                         alt="Tunnel EOIP MikroTik"/>
                    <div class="card-body">
                        <h4 class="card-title">Bind (DNS)</h4>
                        <p class="card-text">
                            Interconnection de deux sous réseaux différents avec DHCP distant sans utiliser de
                            relais DHCP.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.tunnel-eoip-ipsec') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Debian</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/Tunnel-IPsec.png') }}"
                         alt="VPN IPsec Pfsense"/>
                    <div class="card-body">
                        <h4 class="card-title">Apache MariaDB & PHP</h4>
                        <p class="card-text">
                            Un routeur firewall puissant et simple d'utilisation pour tous vos besoins en
                            administration réseau.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.vpn-ipsec-pfsense') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Debian</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/OCS.png') }}"
                         alt="OCS Inventory NG"/>
                    <div class="card-body h-100">
                        <h4 class="card-title">Bookstack</h4>
                        <p class="card-text">
                            Outils d'inventoring libre OpenSource que vous pouvez utiliser pour gérer votre parc
                            informatique.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.ocs-inventory') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Debian</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/PXE.png') }}"
                         alt="PXE MikroTik"/>
                    <div class="card-body">
                        <h4 class="card-title">Nextcloud</h4>
                        <p class="card-text">
                            Découvrez un autre moyen simple et efficace d'installer les OS par le réseau.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.pxe-mikrotik') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Debian</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/PXE.png') }}"
                         alt="PXE MikroTik"/>
                    <div class="card-body">
                        <h4 class="card-title">Free IPA</h4>
                        <p class="card-text">
                            Découvrez un autre moyen simple et efficace d'installer les OS par le réseau.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.pxe-mikrotik') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Rocky Linux</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin contenu internships -->
    </div>
</section>
<section class="album pb-5 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Inventoring et Monitoring</span></h1>
        </div>
        <!-- Contenu internships -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/Tunnel-EOIP.png') }}"
                         alt="Tunnel EOIP MikroTik"/>
                    <div class="card-body">
                        <h4 class="card-title">OCS Inventoring NG</h4>
                        <p class="card-text">
                            Interconnection de deux sous réseaux différents avec DHCP distant sans utiliser de
                            relais DHCP.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.tunnel-eoip-ipsec') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Debian</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/Tunnel-IPsec.png') }}"
                         alt="VPN IPsec Pfsense"/>
                    <div class="card-body">
                        <h4 class="card-title">GLPI</h4>
                        <p class="card-text">
                            Un routeur firewall puissant et simple d'utilisation pour tous vos besoins en
                            administration réseau.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.vpn-ipsec-pfsense') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Debian</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/OCS.png') }}"
                         alt="OCS Inventory NG"/>
                    <div class="card-body h-100">
                        <h4 class="card-title">ZABBIX</h4>
                        <p class="card-text">
                            Outils d'inventoring libre OpenSource que vous pouvez utiliser pour gérer votre parc
                            informatique.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.ocs-inventory') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Debian</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin contenu internships -->
    </div>
</section>
<section class="album pb-5 bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Pfsense</span></h1>
        </div>
        <!-- Contenu internships -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/Tunnel-EOIP.png') }}"
                         alt="Tunnel EOIP MikroTik"/>
                    <div class="card-body">
                        <h4 class="card-title">HRSP (CARP)</h4>
                        <p class="card-text">
                            Interconnection de deux sous réseaux différents avec DHCP distant sans utiliser de
                            relais DHCP.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.tunnel-eoip-ipsec') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Pfsense</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded-4">
                    <img class="img-fluid p-2" src="{{ asset('assets/images/internships/home/Tunnel-IPsec.png') }}"
                         alt="VPN IPsec Pfsense"/>
                    <div class="card-body">
                        <h4 class="card-title">Règle NAT</h4>
                        <p class="card-text">
                            Un routeur firewall puissant et simple d'utilisation pour tous vos besoins en
                            administration réseau.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                <a class="btn btn-primary" href="{{ route('projects.internships.vpn-ipsec-pfsense') }}">Lire</a>
                            </div>
                            <small class="text-body-secondary">Pfsense</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin contenu internships -->
    </div>
</section>
@endsection
