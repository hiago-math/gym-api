<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Services\AddressService;
use App\Exceptions\Address\AddressExceptions;
use App\Http\Requests\AddressRequest;
use App\Imports\AddressImport;
use App\Models\Address;
use http\Exception\RuntimeException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response as ResponseHttp;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;
use mysql_xdevapi\Exception;
use function Illuminate\Tests\Integration\Database\toArray;

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
        try {
            $this->addressService->create($addressRequest->toArray());
        } catch (\Exception $exception) {
            AddressExceptions::handle($exception->getMessage());
        }

        return Response::json([
            'Success' => ResponseHttp::HTTP_OK,
            'Message' => 'Endereço cadastrado com sucesso!',
            'Response' => $addressRequest->toArray()
        ]);
    }

    public function teste(Request $request)
    {
        $file = $request->file('file');

        $heads = (new HeadingRowImport())->toCollection($file);
        dd($heads);

        $addressImport = new AddressImport;
        Excel::import($addressImport, $file);

        dd($addressImport->failures(), $addressImport->errors());

    }
}
