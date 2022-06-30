<?php

declare(strict_types=1);

namespace App\Imports\ExampleImport;

use App\Imports\BaseImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;

class ExampleImport extends BaseImport implements ToModel
{

    /**
     * @return array
     */
    public function columns()
    {
        return [
            'CEP',
            'RUA',
            'COMPLEMENTO',
            'UF',
            'BAIRRO',
            'CIDADE',
            'NUEMRO'
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
            'zip_code' => $row['cep'],
            "street" => $row['rua'],
            "city" => $row["cidade"],
            "district" => $row["bairro"],
            'number' => $row["numero"],
            'uf' => $row["uf"],
            'complement' => $row["complemento"]
        ]);
    }
}
