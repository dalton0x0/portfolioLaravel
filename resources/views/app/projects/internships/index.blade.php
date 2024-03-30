@extends('layouts.app.base')

@section('title', 'Stage')

@section('content')
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <!-- Contenu internships -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @include('partials.card', [
                    'cover' => 'internships/home/Tunnel-EOIP.png',
                    'title' => 'Tunnel EoIP avec IPsec',
                    'description' => "Interconnection de deux sous réseaux différents avec DHCP distant sans utiliser de
                    relais DHCP.",
                    'path' => 'internships.tunnel-eoip-ipsec',
                    'category' => 'MikroTik'
                ])
                @include('partials.card', [
                    'cover' => 'internships/home/Tunnel-IPsec.png',
                    'title' => 'VPN IPsec entre deux sites',
                    'description' => "Un routeur firewall puissant et simple d'utilisation pour tous vos besoins en
                    administration réseau.",
                    'path' => 'internships.vpn-ipsec-pfsense',
                    'category' => 'Pfsense'
                ])
                @include('partials.card', [
                    'cover' => 'internships/home/OCS.png',
                    'title' => 'OCS Inventory NG sous Debian 12',
                    'description' => "Outils d'inventoring libre OpenSource que vous pouvez utiliser pour gérer votre parc
                    informatique.",
                    'path' => 'internships.ocs-inventory',
                    'category' => 'Monitoring'
                ])
                @include('partials.card', [
                    'cover' => 'internships/home/PXE.png',
                    'title' => 'PXE sur MikroTik CHR',
                    'description' => "Découvrez un autre moyen simple et efficace d'installer les OS par le réseau.",
                    'path' => 'internships.pxe-mikrotik',
                    'category' => 'MikroTik'
                ])
            </div>
            <!-- Fin contenu internships -->
        </div>
    </div>
@endsection
