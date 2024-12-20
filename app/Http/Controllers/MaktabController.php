<?php

namespace App\Http\Controllers;

use App\Models\BolimBoshlgi;
use App\Models\BTOqituvchilar;
use App\Models\IKTOqituvchilar;
use App\Models\MaktabTask;
use App\Models\Manivaytachi;
use App\Models\Muthasiz;
use App\Models\OTOqituvchilar;
use App\Models\Rahbariyat;
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
}
