<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PdfDownloadController extends Controller
{
    public function downloadCv () {
        return Storage::download('public/pdf/cv/cv-cheridanh-tsiela.pdf', 'CV Chéridanh TSIELA');
    }
    public function downloadProjectSystemSamba () {
        return Storage::download('public/pdf/bts/system/samba.pdf', 'Projet Système Chéridanh');
    }
    public function downloadProjectNetwork () {
        return Storage::download('public/pdf/bts/network/project-network.pdf', 'Projet Réseau Chéridanh');
    }
}
