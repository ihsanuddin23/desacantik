<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        // Fetch recent posts
        $recentposts = Post::with("category")->where("status", true)->orderBy("id", "DESC")->paginate(10);

        // Fetch featured posts
        $featuredposts = Post::with(["category", "user"])->where("status", true)->where("is_featured", true)->orderBy("id", "DESC")->limit(10)->get();

        // Fetch categories
        $categories = Category::where("status", true)->orderBy("title", "ASC")->limit(10)->get();

        // return view("frontend.sejarah.index", compact("recentposts", "featuredposts", "categories"));
        return view("frontend2.sejarah.index", compact("recentposts", "featuredposts", "categories"));
    }
}
