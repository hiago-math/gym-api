<?php

namespace App\Http\Controllers;

use App\Domain\Services\LoginService;

class LoginController extends BaseController
{
    private LoginService $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }
}
