<?php

namespace App\Domain\Services;

use App\Domain\Component\Helper\StringHelper;
use App\Domain\Repositories\Tables\FunctionRepository;
use Illuminate\Database\Eloquent\Model;

class FunctionService
{
    /**
     * @var FunctionRepository
     */
    private $functionRepository;

    public function __construct(FunctionRepository $functionRepository)
    {
        $this->functionRepository = $functionRepository;
    }

    public function create(array $data = []): ?Model
    {
        $data['label'] = StringHelper::toLowerString(data_get($data, 'name', ''));
        return $this->functionRepository->create($data);
    }
}
