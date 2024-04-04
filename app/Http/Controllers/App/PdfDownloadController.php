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

    /* System PDF */
    public function donwloadSheetSytem () {
        return Storage::download('public/pdf/bts/system/fiche-projet-systeme.pdf', 'Fiche_Projet_Système_Chéridanh.pdf');
    }
    public function downloadProjectSystemSamba () {
        return Storage::download('public/pdf/bts/system/samba.pdf', 'SAMBA_AD_Chéridanh.pdf');
    }

    /* Network PDF */
    public function donwloadSheetNetwork () {
        return Storage::download('public/pdf/bts/network/fiche-projet-reseau.pdf', 'Fiche_Projet_Réseau_Chéridanh.pdf');
    }
    public function downloadProjectNetwork () {
        return Storage::download('public/pdf/system/network/project-network.pdf', 'Projet Réseau Chéridanh.pdf');
    }
}
