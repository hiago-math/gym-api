<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Services\AcademyTrainingService;
use App\Exceptions\Address\AcademyTrainingExceptions;
use App\Http\Requests\AcademyTrainingRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as ResponseHttp;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\ValidationException;

class AcademyTrainingController extends Controller
{
    /**
     * AddressController constructor.
     * @param AcademyTrainingService $addressService
     */
    private AddressTrainingService $addressService;

    public function __construct(AcademyTrainingService $addressService)
    {
        $this->addressService = $addressService;
    }

    public function storage(AcademyTrainingRequest $addressRequest): JsonResponse
    {
        try {
            $response = $this->addressService->create($addressRequest->toArray());
        } catch (ValidationException $exception) {
            AcademyTrainingExceptions::handle($exception->getMessage());
        }

        return Response::json([
            'success' => ResponseHttp::HTTP_OK,
            'message' => 'Academia cadastrada com sucesso!',
            'response' => $response
        ]);
    }
}
