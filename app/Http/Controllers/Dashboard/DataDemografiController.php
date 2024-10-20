<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\FasilitasUmum;
use App\Models\Kependudukan;
use App\Models\Pendidikan;
use App\Models\SaranaTransportasi; // Import the SaranaTransportasi model
use App\Models\SaranaTempatTinggal; // Import the SaranaTempatTinggal model
use App\Models\SaranaUsaha;
use App\Models\Usaha;
use Illuminate\Http\Request;

class DataDemografiController extends Controller
{
    /**
     * Display a listing of the Sarana Transportasi and Sarana Tempat Tinggal.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil data dari berbagai model
        $saranatransportasi = SaranaTransportasi::all();
        $saranatempattinggal = SaranaTempatTinggal::all();
        $fasilitasumum = FasilitasUmum::all();
        $kependudukan = Kependudukan::all();
        $usaha = Usaha::all();
        $pendidikan = Pendidikan::all();
        $saranausaha = SaranaUsaha::all();

        // Mengirimkan variabel ke view
        return view('dashboard.demografi.index', compact('saranatransportasi', 'saranatempattinggal', 'fasilitasumum', 'kependudukan', 'usaha', 'pendidikan', 'saranausaha'));
    }
}
