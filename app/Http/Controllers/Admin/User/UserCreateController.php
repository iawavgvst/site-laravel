<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;

class UserCreateController extends Controller
{
    public function __invoke()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }
}
