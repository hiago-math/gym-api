<?php

namespace App\Http\Controllers;

use App\Domain\Services\PeopleService;

class PeopleController extends BaseController
{
    private PeopleService $peopleService;

    public function __construct(PeopleService $peopleService)
    {
        $this->peopleService = $peopleService;
    }
}
