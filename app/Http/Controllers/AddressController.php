<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Services\AddressService;
use App\Exceptions\Address\AddressExceptions;
use App\Http\Requests\AddressRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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

    public function storage(Request $addressRequest): JsonResponse
    {
        try {
            $response = $this->addressService->create($addressRequest->toArray());
        } catch(\Exception $exception) {
            AddressExceptions::handle($exception->getMessage());
        }

        return Response::json([
            'sucess' => ResponseHttp::HTTP_OK,
            'data' => $response
        ]);
    }
}
