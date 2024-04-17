<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PdfDownloadController extends Controller
{
    /* CV PDF */
    public function downloadCv () {
        return Storage::download('public/pdf/cv/cv-cheridanh-tsiela.pdf', 'CV_Chéridanh_TSIELA.pdf');
    }

    public function downloadSummary () {
        return Storage::download('public/pdf/skills/tableau_synthese_cheridanh.pdf', 'Tableau_de_Synthese_Chéridanh.pdf');
    }

    /* System PDF */
    public function donwloadSheetSytem () {
        return Storage::download('public/pdf/bts/system/fiche-projet-systeme.pdf', 'Fiche_Projet_Système_Chéridanh.pdf');
    }
    public function downloadProjectSystemSamba () {
        return Storage::download('public/pdf/bts/system/samba.pdf', 'Installation_SAMBA_AD_Chéridanh.pdf');
    }
    public function downloadProjectSystemGlpi () {
        return Storage::download('public/pdf/bts/system/glpi.pdf', 'Installation_GLPI_Chéridanh.pdf');
    }
    public function downloadProjectSystemZabbix () {
        return Storage::download('public/pdf/bts/system/zabbix.pdf', 'Installation_ZABBIX_Chéridanh.pdf');
    }
    public function downloadProjectSystemGlpiAgent () {
        return Storage::download('public/pdf/bts/system/glpi-agent.pdf', 'Installtion_Agent_GLPI_Chéridanh.pdf');
    }
    public function downloadProjectSystemZabbixAgent () {
        return Storage::download('public/pdf/bts/system/zabbix-agent.pdf', 'Installtion_Agent_ZABBIX_Chéridanh.pdf');
    }

    /* Network PDF */
    public function donwloadSheetNetwork () {
        return Storage::download('public/pdf/bts/network/fiche-projet-reseau.pdf', 'Fiche_Projet_Réseau_Chéridanh.pdf');
    }
    public function downloadProjectNetwork () {
        return Storage::download('public/pdf/system/network/project-network.pdf', 'Projet_Réseau_Chéridanh.pdf');
    }

    /* TP */
    /* Windows Server PDF */
    public function downloadAdds () {
        return Storage::download('public/pdf/tp/windows-server/ad-ds.pdf', 'Installation_Active_Directory_Chéridanh.pdf');
    }
    public function downloadDhcp () {
        return Storage::download('public/pdf/tp/windows-server/dhcp.pdf', 'Installation_AD-DNS_Chéridanh.pdf');
    }
    public function downloadIis () {
        return Storage::download('public/pdf/tp/windows-server/iis.pdf', 'Installation_Web_IIS_Chéridanh.pdf');
    }
    public function downloadWds () {
        return Storage::download('public/pdf/tp/windows-server/wds.pdf', 'Installation_Web_IIS_Chéridanh.pdf');
    }
    public function downloadTse () {
        return Storage::download('public/pdf/tp/windows-server/tse.pdf', 'Installation_TSE_Chéridanh.pdf');
    }
    public function downloadVpn () {
        return Storage::download('public/pdf/tp/windows-server/vpn.pdf', 'Installation_TSE_Chéridanh.pdf');
    }

    /* Linux */
    public function downloadBind () {
        return Storage::download('public/pdf/tp/linux/bind.pdf', 'Installation_Bind_Chéridanh.pdf');
    }
    public function downloadLamp () {
        return Storage::download('public/pdf/tp/linux/lamp.pdf', 'Installation_LAMP_Chéridanh.pdf');
    }
    public function downloadBookstack () {
        return Storage::download('public/pdf/tp/linux/bookstack.pdf', 'Installation_Bookstack_Chéridanh.pdf');
    }
    public function downloadNextcloud () {
        return Storage::download('public/pdf/tp/linux/nextcloud.pdf', 'Installation_Nextcloud_Chéridanh.pdf');
    }
    public function downloadFreeipa () {
        return Storage::download('public/pdf/tp/linux/free-ipa.pdf', 'Installation_Free-IPA_Chéridanh.pdf');
    }

    /* Inventoring & Monitoring */
    public function downloadOcs () {
        return Storage::download('public/pdf/tp/inventoring-monitoring/ocs.pdf', 'Installation_OCS_Chéridanh.pdf');
    }
    public function downloadGlpi () {
        return Storage::download('public/pdf/tp/inventoring-monitoring/glpi.pdf', 'Installation_GLPI_Chéridanh.pdf');
    }
    public function downloadZabbix () {
        return Storage::download('public/pdf/tp/inventoring-monitoring/zabbix.pdf', 'Installation_ZABBIX_Chéridanh.pdf');
    }

    /* Pfsense */
    public function downloadCarp () {
        return Storage::download('public/pdf/tp/pfsense/carp.pdf', 'Installation_CARP_Chéridanh.pdf');
    }
    public function downloadNat () {
        return Storage::download('public/pdf/tp/pfsense/nat.pdf', 'Règles_NAT_Chéridanh.pdf');
    }
}
