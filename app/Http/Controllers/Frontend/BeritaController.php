<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $recentposts = Post::with("category")->where("status", true)->orderBy("id", "DESC")->paginate(6);
        $featuredposts = Post::with(["category", "user"])->where("status", true)->where("is_featured", true)->orderBy("id", "DESC")->limit(10)->get();
        $categories = Category::where("status", true)->orderBy("title", "ASC")->limit(10)->get();
        // return view("frontend.home.index", compact("recentposts", "featuredposts", "categories"));
        return view("frontend2.berita.index", compact("recentposts", "featuredposts", "categories"));
    }
}
