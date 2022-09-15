<?php

namespace Database\Seeders;

use App\Models\AcademyTraining;
use App\Models\Equipment;
use App\Models\People;
use App\Models\TypeStatus;
use App\Models\User;
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
            ->insert([
                    [
                        'uid_type' => Str::uuid(),
                        'type' => Str::lower(AcademyTraining::class)
                    ],
                    [
                        'uid_type' => Str::uuid(),
                        'type' => Str::lower(People::class)
                    ],
                    [
                        'uid_type' => Str::uuid(),
                        'type' => Str::lower(User::class)
                    ],
                    [
                        'uid_type' => Str::uuid(),
                        'type' => Str::lower(Equipment::class)
                    ]
                ]);
    }
}
