<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FasilitasUmum;
use App\Models\IdentitasRt;
use App\Models\Kependudukan;
use App\Models\Pendidikan;
use App\Models\PendidikanRT;
use App\Models\Post;
use App\Models\SaranaTempatTinggal;
use App\Models\SaranaTransportasi; // Import the SaranaTransportasi model
use App\Models\SaranaUsaha;
use App\Models\Usaha;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Intervention\Image\Image;


use App\Exports\PendidikanRTExport;



class DemografiRtController extends Controller
{
    public function index(Request $request)
    {
        // Fetch recent posts
        $recentposts = Post::with("category")->where("status", true)->orderBy("id", "DESC")->paginate(10);

        // Fetch featured posts
        $featuredposts = Post::with(["category", "user"])->where("status", true)->where("is_featured", true)->orderBy("id", "DESC")->limit(10)->get();

        // Fetch categories
        $categories = Category::where("status", true)->orderBy("title", "ASC")->limit(10)->get();

        // Fetch identitas RT
        $identitasrt = IdentitasRt::all();

        // Initialize selectedIdentitasrt variable
        $selectedIdentitasrt = null;

        // Check if identitasrt_id exists in request and find the corresponding IdentitasRt record
        if ($request->input('identitasrt_id')) {
            $selectedIdentitasrt = IdentitasRt::find($request->input('identitasrt_id'));
            // Filter data sesuai dengan identitasrt_id yang dipilih
            $filteredData = PendidikanRT::where('identitasrt_id', $request->input('identitasrt_id'))->get();
        } else {
            // Jika tidak ada filter, ambil semua data PendidikanRT
            $filteredData = PendidikanRT::all();
        }

        // Mengambil data pendidikan untuk laki-laki dan perempuan
        $pendidikanRtData = PendidikanRT::select(
            'identitasrt_id',
            'total',
            'tidak_tamat_sd',
            'tamat_sd',
            'tamat_smp',
            'tamat_sma',
            'tamat_perguruan_tinggi'
        )->get();

        return view("frontend2.pendidikanrt.index", compact(
            "recentposts",
            "featuredposts",
            "categories",
            "filteredData",
            "identitasrt",
            "pendidikanRtData",
            "selectedIdentitasrt"
        ));
    }


    public function printPDF(Request $request)
    {
        // Ambil identitasrt_id dari request
        $identitasrt_id = $request->input('identitasrt_id');

        // Cek apakah identitasrt_id ada di request
        if ($identitasrt_id) {
            // Jika ada, ambil data satu RT
            $identitasRt = IdentitasRt::find($identitasrt_id);

            // Jika data identitas RT tidak ditemukan, kembali ke halaman sebelumnya atau handle error
            if (!$identitasRt) {
                return redirect()->back()->with('error', 'Data identitas RT tidak ditemukan');
            }

            // Fetch data PendidikanRT untuk satu RT
            $pendidikanrt = PendidikanRT::where('identitasrt_id', $identitasrt_id)->first();

            // Jika data pendidikan tidak ditemukan, atur nilai default
            if (!$pendidikanrt) {
                // Buat objek kosong untuk pendidikan dengan nilai default
                $pendidikanRtData = (object) [
                    'identitasrt_id' => $identitasrt_id,
                    'total' => 0,
                    'tidak_tamat_sd' => 0,
                    'tamat_sd' => 0,
                    'tamat_smp' => 0,
                    'tamat_sma' => 0,
                    'tamat_perguruan_tinggi' => 0
                ];
            } else {
                // Jika data pendidikan ditemukan, ambil data tersebut
                $pendidikanRtData = $pendidikanrt;
            }

            $data = [
                'pendidikanRtData' => $pendidikanRtData,
                'identitasRt' => $identitasRt,
                'now' => Carbon::now('Asia/Jakarta'),
            ];

            // Buat PDF untuk satu RT
            $pdf = Pdf::loadView('frontend2.pendidikanrt.pdf_single', $data);
        } else {
            // Jika tidak ada identitasrt_id, ambil seluruh data RT
            $identitasRts = IdentitasRt::all();
            $pendidikanRts = PendidikanRT::whereIn('identitasrt_id', $identitasRts->pluck('id'))->get();

            $data = [
                'identitasRts' => $identitasRts,
                'pendidikanRts' => $pendidikanRts,
                'now' => Carbon::now('Asia/Jakarta'),
            ];

            // Buat PDF untuk seluruh RT
            $pdf = Pdf::loadView('frontend2.pendidikanrt.pdf_all', $data);
        }

        // Kembalikan PDF sebagai response
        return $pdf->download($identitasrt_id ? 'data_demografi_rt_' . $identitasrt_id . '.pdf' : 'data_demografi_seluruh_rt.pdf');
    }

    public function exportExcel(Request $request)
    {
        $identitasrt_id = $request->input('identitasrt_id');
        return Excel::download(new PendidikanRTExport($identitasrt_id), 'data_demografi_rt.xlsx');
    }
}
