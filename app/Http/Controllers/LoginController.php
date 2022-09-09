<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Services\LoginService;

class LoginController extends Controller
{
    private LoginService $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }
}
