<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Services\AddressService;
use App\Http\Requests\AddressRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as ResponseHttp;
use Illuminate\Support\Facades\Response;

class AddressController extends Controller
{
    /**
     * AddressController constructor.
     * @param AddressService $addressService
     */
    private $addressService;

    public function __construct(AddressService $addressService)
    {
        $this->addressService = $addressService;
    }

    public function storage(AddressRequest $addressRequest): JsonResponse
    {
        $response = $this->addressService->create($addressRequest->toArray());

        return Response::json([
            'sucess' => ResponseHttp::HTTP_OK,
            'data' => $response
        ]);
    }
}
