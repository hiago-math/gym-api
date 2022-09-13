<?php

namespace Database\Seeders;

use App\Models\AcademyTraining;
use App\Models\TypeStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeStatus::query()
            ->updateOrCreate([
                'type' => Str::lower(AcademyTraining::class)
            ]);
    }
}
