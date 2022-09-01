<?php

declare(strict_types=1);

namespace App\Imports\ExampleImport;

use App\Imports\BaseImport;
use App\Models\People;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException as ValidationExceptionAlias;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Throwable;

class ExampleImport extends BaseImport implements ToModel, WithEvents
{
    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            'cep',
            'rua',
            'uf',
            'bairro',
            'cidade',
            'numero',
            'complemento'
        ];
    }

    /**
     * Exemplo usaddo na tabela de "Address"
     *
     * @param array $row
     */
    public function model(array $row): void
    {
        DB::table('address')->insert([
            'uid_address' => Str::uuid()->toString(),
            'zip_code' => data_get($row, 'cep'),
            "street" => data_get($row, 'rua'),
            "city" => data_get($row, 'cidade'),
            "district" => data_get($row, 'bairro'),
            'number' => data_get($row, 'numero'),
            'uf' => data_get($row, 'uf'),
            'complement' => data_get($row, "complemento")
        ]);
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(People $people) {
            dd($people);
            }
        ];
    }
}
