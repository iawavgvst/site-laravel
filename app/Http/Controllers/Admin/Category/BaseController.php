<?php

namespace App\Http\Controllers\Admin\Category;

use App\Services\Category\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
