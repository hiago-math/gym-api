<?php

namespace App\Imports;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AddressImport implements ToModel, WithHeadingRow, WithBatchInserts, SkipsOnError, SkipsOnFailure
{
    private $mapping = 1;

    use Importable, SkipsErrors, SkipsFailures;

    /**
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

    public function getQuantidadeLinhas()
    {
        return $this->row;
    }

    /**
     * Linha que começará a leitura do arquivo
     *
     * @return int
     */
    public function headingRow()
    {
        return $this->mapping;
    }


    /**
     * Quantidade de linhas por processamento
     *
     * @return int
     */
    public function batchSize(): int
    {
        return 100;
    }

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
}
