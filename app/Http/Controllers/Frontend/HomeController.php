<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\IdentitasRt;
use App\Models\Pemerintah;
use App\Models\PendidikanRT;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Visitor;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        // Mencatat pengunjung
        Visitor::create([
            'ip_address' => $request->ip(),
            'browser' => $request->header('User-Agent'),
            'os' => php_uname('s') . ' ' . php_uname('r'), // Mengambil OS
            // Tambahkan kolom lain sesuai kebutuhan
        ]);
        // Menghitung total pengunjung
        $totalPengunjung = Visitor::count(); // Menghitung jumlah pengunjung yang ada
        // Ambil kategori dengan judul "Makanan, Minuman Dan Tempat"
        $kategoriMakanan = Category::where('title', 'Makanan, Minuman Dan Tempat')->first();
        // Ambil posting berdasarkan kategori tersebut
        $postMakanan = Post::with('category')
            ->where('status', true)
            ->where('category_id', $kategoriMakanan->id) // Pastikan Anda memiliki kolom category_id di tabel Post
            ->orderBy('id', 'DESC')
            ->limit(10) // Ambil 10 posting, sesuaikan dengan kebutuhan
            ->get();

        $recentposts = Post::with("category")->where("status", true)->orderBy("id", "DESC")->paginate(10);
        $featuredposts = Post::with(["category", "user"])->where("status", true)->where("is_featured", true)->orderBy("id", "DESC")->limit(10)->get();
        $categories = Category::where("status", true)->orderBy("title", "ASC")->limit(10)->get();
        $popularposts = Post::with("category")
            ->where("status", true)
            ->orderBy("views", "DESC") // Mengurutkan berdasarkan views terbanyak
            ->limit(5) // Mengambil 5 artikel populer
            ->get();
        // return view("frontend.home.index", compact("recentposts", "featuredposts", "categories"));
        $pemerintahdesa = Pemerintah::all();
        // Menghitung total penduduk dari PendidikanRT

        // Menghitung jumlah dusun,rt,rw, jumlah kk unik dari IdentitasRt
        $totalDusun = IdentitasRt::distinct()->count('dusun');
        $totalRt = IdentitasRt::count('nomor_rt');
        $totalRw = IdentitasRt::distinct('nomor_rw')->count('nomor_rw');
        $totalKK = IdentitasRt::sum('jumlah_kk');
        $totallaki = IdentitasRt::sum('laki_laki');
        $totalperempuan = IdentitasRt::sum('perempuan');
        $totalpenduduk = $totallaki + $totalperempuan;
        return view("frontend2.home.index", compact("popularposts", "recentposts", "featuredposts", "categories", "pemerintahdesa",  "totalDusun", "totalRt", "totalRw", "totalKK", "totalPengunjung", "postMakanan", "kategoriMakanan", "totallaki", "totalperempuan", "totalpenduduk"));
    }
}
