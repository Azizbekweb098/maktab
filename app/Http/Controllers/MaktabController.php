<?php

namespace App\Http\Controllers;

use App\Models\BolimBoshlgi;
use App\Models\BTOqituvchilar;
use App\Models\Geleriya;
use App\Models\IKTOqituvchilar;
use App\Models\Infografika;
use App\Models\maktabNews;
use App\Models\MaktabTask;
use App\Models\Manivaytachi;
use App\Models\Muthasiz;
use App\Models\one_smena;
use App\Models\OTOqituvchilar;
use App\Models\qoshimDars;
use App\Models\Rahbariyat;
use App\Models\sportTogaraklar;
use App\Models\two_smena;
use App\Models\YoshlarYetakchisi;
use App\Models\ZamDirektor;
use Illuminate\Http\Request;

class MaktabController extends Controller
{
    public function maktabtask()
    {
        $maktabtask = MaktabTask::all();
        return view('maktab-pages.maktab-vazifalari', compact('maktabtask'));
    }
    public function rahbariyat()
    {
        $rahbariyat = Rahbariyat::all();
        $zamD = ZamDirektor::all();
        $manaviyat = Manivaytachi::all();
        $bolim = BolimBoshlgi::all();
        $yoshlar = YoshlarYetakchisi::all();
        return view('maktab-pages.rahbariyat', compact('rahbariyat', 'zamD', 'manaviyat', 'bolim', 'yoshlar'));
    }
    public function teachers()
    {
        $oliy = OTOqituvchilar::all();
        $birinchi = BTOqituvchilar::all();
        $ikkinchi = IKTOqituvchilar::all();
        $muthasiz = Muthasiz::all();
        return view('maktab-pages.oqituvchilar', compact('oliy', 'birinchi', 'ikkinchi', 'muthasiz'));
    }
    public function rekvizit()
    {
        return view('maktab-pages.rekvizit');
    }
    public function one_smena()
    {
        $one_smena  = one_smena::all();
        $two_smena = two_smena::all();
        $qoshimcha = qoshimDars::all();
        $sport = sportTogaraklar::all();
    return view('maktab-pages.talim', compact('one_smena', 'two_smena', 'qoshimcha', 'sport'));
    }
    public function foydali()
    {
        return view('maktab-pages.foydali');
    }
    public function newsm()
    {
        $news = maktabNews::all();
        return view('maktab-pages.maktab-news', compact('news'));
    }
    public function galeriya()
    {
        $gale = Geleriya::all();
        return view('maktab-pages.galeriya', compact('gale'));
    }
    public function info()
    {
        $info = Infografika::all();
        return view('maktab-pages.infografika', compact('info'));
    }
    
}
