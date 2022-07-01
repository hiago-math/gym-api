<?php

declare(strict_types=1);

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

abstract class BaseImport implements WithHeadingRow, WithBatchInserts
{
    protected $mapping = 1;

    protected $errors = [];

    use Importable;

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

    /**
     * @param Collection $collection
     * @throws \Throwable
     */
    public function customValidationColumns(Collection $collection): void
    {
        $collection->each(function ($collection) {
            $headers = $collection->first();

            $headers->each(function ($value) {
                if (!in_array(strtolower($value), $this->columns())) {
                    $this->errors[] = "Campo '{$value}' não é valido para essa importação";
                }
            });
        });

        throw_if(!empty($this->errors), ValidationException::withMessages($this->errors));
    }
}
