<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Imports\ExampleImport\ExampleImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExampleImportController extends Controller
{
    public function __invoke(Request $request)
    {
        $file = $request->file('file');

//        $heads = (new HeadingRowImport())->toCollection($file);
//        dd($heads);

        $addressImport = new ExampleImport;
        Excel::import($addressImport, $file);

        dd($addressImport->failures(), $addressImport->errors());
    }
}
