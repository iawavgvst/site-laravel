<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Post;

class CategoryCreateController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.category.create', compact('posts'));
    }
}
