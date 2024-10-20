<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\IdentitasRt;
use App\Models\Post;
use Illuminate\Http\Request;

class IdentitasRtController extends Controller
{
    public function index()
    {
        // Fetch recent posts
        $recentposts = Post::with("category")->where("status", true)->orderBy("id", "DESC")->paginate(10);

        // Fetch featured posts
        $featuredposts = Post::with(["category", "user"])->where("status", true)->where("is_featured", true)->orderBy("id", "DESC")->limit(10)->get();

        // Fetch categories
        $categories = Category::where("status", true)->orderBy("title", "ASC")->limit(10)->get();
        $identitasrt = IdentitasRt::orderBy('dusun', 'asc')->paginate(5);
        // return view("frontend.identitasrt.index", compact("recentposts", "featuredposts", "categories", "identitasrt"));
        return view("frontend2.identitasrt.index", compact("recentposts", "featuredposts", "categories", "identitasrt"));
    }
}
