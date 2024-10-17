<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\User\Service;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
