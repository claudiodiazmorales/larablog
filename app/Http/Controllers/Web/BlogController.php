<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('posted', 'yes')->paginate(2);
        return view('web.blog.index', compact("posts"));
    }

    public function show(Post $post)
    {
        return view('web.blog.show', compact("post"));
    }
}
