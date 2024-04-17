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

    /* Linux */
    public function downloadLamp () {
        return Storage::download('public/pdf/tp/linux/lamp.pdf', 'Installation_LAMP_Chéridanh.pdf');
    }
}
