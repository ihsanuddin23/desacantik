<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Request $request, $slug)
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
        $post = Post::with(["category", "user", "tags", "comments.user", "comments.replies.user"])->with("comments.replies", function ($q) {
            $q->where("status", true);
        })->with("comments", function ($q) {
            $q->where("status", true)->where("parent_id", null);
        })->withCount(["tags", "comments" => function ($q) {
            $q->where("status", true);
        }])->where("status", true)->where("slug", $slug)->first();
        if ($post) {
            $post->views += 1;
            $post->save();
            $str = Str::class;
            return view("frontend2.post.index", compact("popularposts", "recentposts", "featuredposts", "categories", "post", "str", "totalPengunjung"));
        }
        return abort(404);
    }
}
