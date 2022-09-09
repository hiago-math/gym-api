<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Services\PeopleService;

class PeopleController extends Controller
{
    private PeopleService $peopleService;

    public function __construct(PeopleService $peopleService)
    {
        $this->peopleService = $peopleService;
    }
}
