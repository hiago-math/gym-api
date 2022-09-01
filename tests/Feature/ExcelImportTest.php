<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Maatwebsite\Excel\Facades\Excel;
use Tests\TestCase;

class ExcelImportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example_import_route_sucess()
    {
        $file = UploadedFile::fake()->create('import_relatorio.csv');

        Excel::fake();

        $this->post('api/import', [
            'file' => $file
        ]);

        Excel::assertImported('import_relatorio.csv');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example_import_route_error()
    {
        $file = UploadedFile::fake()->create('import_relatorio.png');

        Excel::fake();

        $this->post('api/import', [
            'file' => $file
        ]);

        Excel::assertImported('import_relatorio.png');
    }
}
