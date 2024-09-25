<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        //        $this->authorize('view', auth()->user());
        return view('contact');
    }
}
