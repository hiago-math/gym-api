<?php

namespace App\Domain\Services;

use App\Domain\Component\Helper\PayloadHelper;
use App\Domain\Component\Helper\StringHelper;
use App\Domain\Repositories\Tables\AcademyTrainingRepository;
use App\Domain\Repositories\Tables\StatusRepository;
use Illuminate\Database\Eloquent\Model;

class AcademyTrainingService
{
    private AcademyTrainingRepository $academyTrainingRepository;
    private AddressService $addressService;
    private StatusRepository $statusRepository;

    public function __construct(AcademyTrainingRepository $academyTrainingRepository, AddressService $addressService, StatusRepository $statusRepository)
    {
        $this->academyTrainingRepository = $academyTrainingRepository;
        $this->statusRepository = $statusRepository;
        $this->addressService = $addressService;
    }

    public function create(array $data): ?Model
    {
        $filds = [];
        foreach ($data as $key => $value) {
            $filds[$key] = StringHelper::removeSpecialcharactersAndAccent($value);
        }

        $address = $this->addressService->create($filds);

        $filds['uid_status'] = $this->statusRepository->getStatusDefault()->uid_status;
        $filds['uid_address'] = $address->uid_address;
        $filds = PayloadHelper::normalizePayload($filds, $this->academyTrainingRepository->getFillable());

        return $this->academyTrainingRepository->firstOrCreate($filds);
    }


}
