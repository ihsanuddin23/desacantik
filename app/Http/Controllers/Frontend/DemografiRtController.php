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
use Illuminate\Http\Request;

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


        // Pendidikan RT data with filtering
        if ($request->input('identitasrt_id')) {
            // Filter berdasarkan identitasrt_id yang dipilih
            $pendidikanrt = PendidikanRT::where('identitasrt_id', $request->input('identitasrt_id'))->get();
        } else {
            // Ambil data dengan identitasrt_id 1 jika tidak ada RT yang dipilih
            $pendidikanrt = PendidikanRT::where('identitasrt_id', 1)->get();
        }
        // Mengambil data pendidikan untuk laki-laki dan perempuan
        $pendidikanRtData = PendidikanRt::select(
            'laki_laki',
            'laki_belum_sekolah',
            'laki_belum_tamat_sd',
            'laki_tamat_sd',
            'laki_sltp',
            'laki_slta',
            'laki_diploma_1_2',
            'laki_diploma_3',
            'laki_diploma_4_strata_1',
            'laki_strata_2',
            'laki_strata_3',
            'laki_belum_mengisi',
            'perempuan',
            'perempuan_belum_sekolah',
            'perempuan_belum_tamat_sd',
            'perempuan_tamat_sd',
            'perempuan_sltp',
            'perempuan_slta',
            'perempuan_diploma_1_2',
            'perempuan_diploma_3',
            'perempuan_diploma_4_strata_1',
            'perempuan_strata_2',
            'perempuan_strata_3',
            'perempuan_belum_mengisi'
        )->get();

        // Hitung total populasi dengan menjumlahkan semua kolom
        $total_population = PendidikanRt::sum('laki_laki') + PendidikanRt::sum('perempuan');

        return view("frontend2.pendidikanrt.index", compact("recentposts", "featuredposts", "categories", "pendidikanrt", "total_population", "identitasrt", "pendidikanRtData"));
    }
}
