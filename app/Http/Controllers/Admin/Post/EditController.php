<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Models\Category;
use App\Models\Post;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }
}
