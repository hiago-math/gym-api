<?php

namespace App\Http\Controllers;

use App\Domain\Services\FunctionService;
use App\Http\Requests\FunctionRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as ResponseHttp;
use Illuminate\Support\Facades\Response;

class FunctionController extends BaseController
{
    private FunctionService $functionService;

    public function __construct(FunctionService $functionService)
    {
        $this->functionService = $functionService;
    }

    public function storage(FunctionRequest $request): JsonResponse
    {
        $response = $this->functionService->create($request->toArray());
        return $this->returnResponse($response, 'Função cadastrada com sucesso!');
    }
}
