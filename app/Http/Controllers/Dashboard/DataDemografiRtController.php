<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\IdentitasRt;
use App\Models\PendidikanRt;
use App\Models\PekerjaanRt;
use Illuminate\Http\Request;

class DataDemografiRtController extends Controller
{
    public function index()
    {
        // Ambil data Identitas RT diurutkan berdasarkan nama dusun dan lakukan paginasi
        $identitasrt = IdentitasRt::orderBy('dusun', 'asc')->paginate(5);

        // Ambil data Pendidikan RT
        $pendidikanrt = PendidikanRt::with('identitasRt')->paginate(5);

        // Ambil data Pekerjaan RT dengan relasi ke Identitas RT
        $pekerjaanrt = PekerjaanRt::with('identitasRt')->paginate(5);

        // Kirim data ke view
        return view('dashboard.demografirt.index', compact('identitasrt', 'pendidikanrt', 'pekerjaanrt'));
    }
}
