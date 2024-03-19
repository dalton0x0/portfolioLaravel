<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class InternshipsController extends Controller
{
    public function index ()
    {
        return view('app.projects.internships.index');
    }
    public function tunnelEoipIpsec ()
    {
        return view('app.projects.internships.tunnel-eoip-ipsec');
    }
    public function vpnIpsecPfsense ()
    {
        return view('app.projects.internships.vpn-ipsec-pfsense');
    }
    public function ocsInventory ()
    {
        return view('app.projects.internships.ocs-inventory');
    }
    public function pxeMikrotik ()
    {
        return view('app.projects.internships.pxe-mikrotik');
    }
}
