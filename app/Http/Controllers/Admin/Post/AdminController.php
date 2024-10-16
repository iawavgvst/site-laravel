<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class AdminController extends Controller
{
    public function __invoke()
    {
        $this->authorize('view', auth()->user());

        $posts = Post::paginate(4);
        return view('admin', compact('posts'));
    }
}
