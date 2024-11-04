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
        $totalPenduduk = PendidikanRT::sum('laki_laki') + PendidikanRT::sum('perempuan');

        // Menghitung jumlah dusun,rt,rw, jumlah kk unik dari IdentitasRt
        $totalDusun = IdentitasRt::distinct()->count('dusun');
        $totalRt = IdentitasRt::count('nomor_rt');
        $totalRw = IdentitasRt::distinct('nomor_rw')->count('nomor_rw');
        $totalKK = IdentitasRt::sum('jumlah_kk');
        return view("frontend2.home.index", compact("popularposts", "recentposts", "featuredposts", "categories", "pemerintahdesa", "totalPenduduk", "totalDusun", "totalRt", "totalRw", "totalKK", "totalPengunjung"));
    }
}
