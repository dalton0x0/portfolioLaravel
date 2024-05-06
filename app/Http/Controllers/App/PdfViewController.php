<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PdfViewController extends Controller
{
    /* CV PDF */
    public function viewCv () {
        return response()->file(realpath(public_path("storage/pdf/cheridanh/cv-cheridanh-tsiela.pdf")));
    }

    public function viewSummary () {
        return response()->file(realpath(public_path("storage/pdf/cheridanh/tableau-synthese-cheridanh.pdf")));
    }

    /* System PDF */
    public function viewSheetSystem () {
        return response()->file(realpath(public_path("storage/pdf/system/fiche-projet-systeme.pdf")));
    }
    public function viewProjectSystemSamba () {
        return response()->file(realpath(public_path("storage/pdf/system/samba.pdf")));
    }
    public function viewProjectSystemGlpi () {
        return response()->file(realpath(public_path("storage/pdf/system/glpi.pdf")));
    }
    public function viewProjectSystemZabbix () {
        return response()->file(realpath(public_path("storage/pdf/system/zabbix.pdf")));
    }
    public function viewProjectSystemGlpiAgent () {
        return response()->file(realpath(public_path("storage/pdf/system/glpi-agent.pdf")));
    }
    public function viewProjectSystemZabbixAgent () {
        return response()->file(realpath(public_path("storage/pdf/system/zabbix-agent.pdf")));
    }

    /* Network PDF */
    public function viewSheetNetwork () {
        return response()->file(realpath(public_path("storage/pdf/network/fiche-projet-reseau.pdf")));
    }
}
