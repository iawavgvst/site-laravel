<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class MainController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(4);
        return view('admin.post.index', compact('posts'));
    }
}
