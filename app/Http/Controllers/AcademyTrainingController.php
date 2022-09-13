<?php

namespace App\Http\Controllers;

use App\Domain\Services\AcademyTrainingService;
use App\Exceptions\Address\AcademyTrainingExceptions;
use App\Http\Requests\AcademyTrainingRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class AcademyTrainingController extends BaseController
{
    private AcademyTrainingService $academyTrainingService;

    public function __construct(AcademyTrainingService $academyTrainingService)
    {
        $this->academyTrainingService = $academyTrainingService;
    }

    public function storage(AcademyTrainingRequest $addressRequest): JsonResponse
    {
        try {
            $response = $this->academyTrainingService->create($addressRequest->toArray());
        } catch (\RuntimeException | ValidationException $exception) {
            AcademyTrainingExceptions::handle($exception->getMessage());
        }

        return $this->returnResponse($response, 'Academia cadastrada com sucesso!');
    }
}
