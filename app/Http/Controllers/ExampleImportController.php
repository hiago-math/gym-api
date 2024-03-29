<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImportRequest;
use App\Imports\ExampleImport\ExampleImport;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response as JsonResponse;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;

class ExampleImportController extends BaseController
{
    private ExampleImport $exampleImport;
    private HeadingRowImport $headingRowImport;

    public function __construct(ExampleImport $exampleImport, HeadingRowImport $headingRowImport)
    {
        $this->exampleImport = $exampleImport;
        $this->headingRowImport = $headingRowImport;
    }

    public function __invoke(ImportRequest $request)
    {
        try {
            $file = $request->file('file');
            $request->get('type');

            $heads = $this->headingRowImport->toCollection($file);
            $this->exampleImport->customValidationColumns($heads);

            Excel::import($this->exampleImport, $file);

        } catch (ValidationException $exception) {
            return JsonResponse::json([
                'code' => Response::HTTP_BAD_REQUEST,
                'message' => 'Erro ao importar o arquivo',
                'error' => $exception->errors()
            ]);
        }

        return $this->returnResponse(define('null', null, true), "Arquivo importado com Sucesso");
    }
}
