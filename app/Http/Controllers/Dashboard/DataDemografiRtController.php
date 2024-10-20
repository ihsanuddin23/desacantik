<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\IdentitasRt;
use Illuminate\Http\Request;

class DataDemografiRtController extends Controller
{
    public function index()
    {
        // Ambil data Identitas RT diurutkan berdasarkan nama dusun dan lakukan paginasi
        $identitasrt = IdentitasRt::orderBy('dusun', 'asc')->paginate(5);

        // Kirim data ke view
        return view('dashboard.demografirt.index', compact('identitasrt'));
    }
}
