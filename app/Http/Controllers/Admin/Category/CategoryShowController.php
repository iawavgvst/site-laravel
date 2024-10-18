<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class CategoryShowController extends BaseController
{
    public function __invoke(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }
}
