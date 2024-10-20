<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FasilitasUmum;
use App\Models\Kependudukan;
use App\Models\Pendidikan;
use App\Models\Post;
use App\Models\SaranaTempatTinggal;
use App\Models\SaranaTransportasi; // Import the SaranaTransportasi model
use App\Models\SaranaUsaha;
use App\Models\Usaha;
use Illuminate\Http\Request;

class DemografiController extends Controller
{
    public function index()
    {
        // Fetch recent posts
        $recentposts = Post::with("category")->where("status", true)->orderBy("id", "DESC")->paginate(10);

        // Fetch featured posts
        $featuredposts = Post::with(["category", "user"])->where("status", true)->where("is_featured", true)->orderBy("id", "DESC")->limit(10)->get();

        // Fetch categories
        $categories = Category::where("status", true)->orderBy("title", "ASC")->limit(10)->get();

        // Fetch Sarana Transportasi data
        $saranas = SaranaTransportasi::all(); // Get all SaranaTransportasi records
        // Fetch Sarana Tempat Tinggal data
        $saranatempattinggal = SaranaTempatTinggal::all(); // Get all Sarana Tempat Tinggal records
        // Fetch Fasilitas Umum data
        $fasilitasumum = FasilitasUmum::all(); // Get all Fasilitas Umum records
        // Fetch Kependudukan data
        $kependudukan = Kependudukan::all(); // Get all Kependudukan records
        // Fetch Usaha data
        $usaha = Usaha::all(); // Get all Usaha records
        // Fetch Pendidikan
        $pendidikan = Pendidikan::all(); // Get all Pendidikan records
        // Fetch Sarana Usaha
        $saranausaha = SaranaUsaha::all(); // Get all Sarana Usaha records


        // return view("frontend.demografi.index", compact("recentposts", "featuredposts", "categories", "saranas", "saranatempattinggal", "fasilitasumum", "kependudukan", "usaha", "pendidikan", "saranausaha"));
        return view("frontend2.demografi.index", compact("recentposts", "featuredposts", "categories", "saranas", "saranatempattinggal", "fasilitasumum", "kependudukan", "usaha", "pendidikan", "saranausaha"));
    
    }
}
