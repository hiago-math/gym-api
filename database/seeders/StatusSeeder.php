<?php

namespace Database\Seeders;

use App\Models\AcademyTraining;
use App\Models\Status;
use App\Models\TypeStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = Status::query()
            ->updateOrCreate([
                'name' => Str::ucfirst('PRIMEIRO ACESSO'),
                'label' => Str::lower('PRIMEIRO_ACESSO'),
                'description' => 'Status para indicar que foi apenas cadastrado'
            ]);

        $typeStatus = TypeStatus::query()
            ->where('type', Str::lower(AcademyTraining::class))
            ->pluck('uid_type');

        $status->typeStatusAcademy()->sync($typeStatus);

    }
}
