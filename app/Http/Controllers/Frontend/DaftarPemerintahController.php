<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pemerintah;
use App\Models\Category;
use App\Models\Post;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DaftarPemerintahController extends Controller
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
        // Fetch recent posts
        $recentposts = Post::with("category")->where("status", true)->orderBy("id", "DESC")->paginate(10);

        // Fetch featured posts
        $featuredposts = Post::with(["category", "user"])->where("status", true)->where("is_featured", true)->orderBy("id", "DESC")->limit(10)->get();

        // Fetch categories
        $categories = Category::where("status", true)->orderBy("title", "ASC")->limit(10)->get();
        $pemerintahdesa = Pemerintah::all();
        $popularposts = Post::with("category")
            ->where("status", true)
            ->orderBy("views", "DESC") // Mengurutkan berdasarkan views terbanyak
            ->limit(5) // Mengambil 5 artikel populer
            ->get();
        // return view("frontend.pemerintahdesa.index", compact("recentposts", "featuredposts", "categories", "pemerintahdesa"));
        return view("frontend2.pemerintahdesa.index", compact("popularposts", "recentposts", "featuredposts", "categories", "pemerintahdesa", "totalPengunjung"));
    }
}
