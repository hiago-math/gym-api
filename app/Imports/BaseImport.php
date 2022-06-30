<?php

declare(strict_types=1);

namespace App\Imports;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

abstract class BaseImport implements WithHeadingRow, WithBatchInserts, SkipsOnError, SkipsOnFailure
{
    private $mapping = 1;

    use Importable, SkipsErrors, SkipsFailures;

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
}
