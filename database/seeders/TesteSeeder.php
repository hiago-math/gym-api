<?php

namespace Database\Seeders;

use App\Models\AcademyTraining;
use App\Models\Status;
use App\Models\TypeStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = TypeStatus::query()
            ->create(
                [
                    'type' => Str::lower(AcademyTraining::class)
                ]
            );

        $status = Status::create(
                [
                    'label' => Str::lower('aprovado'),
                    'name' => Str::upper('aprovado'),
                    'description' => null
                ]
            );

        $status->statusAcademy()->sync($type->uid_type);
    }
}
