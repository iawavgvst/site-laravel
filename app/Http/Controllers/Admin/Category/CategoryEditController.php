<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Role;
use App\Models\User;

class CategoryEditController extends BaseController
{
    public function __invoke(Category $category)
    {
        return view('admin.category.edit', compact('category')) ;
    }
}
