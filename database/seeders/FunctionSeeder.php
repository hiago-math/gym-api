<?php

namespace Database\Seeders;

use App\Models\Functions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Functions::query()
            ->insert([
                [
                    'uid_function' => Str::uuid(),
                    'label' => 'deus_supremo',
                    'name' => 'Deus Supremo',
                    'level' => '0'
                ],
                [
                    'uid_function' => Str::uuid(),
                    'label' => 'professor',
                    'name' => 'Professor',
                    'level' => '1.0'
                ],
                [
                    'uid_function' => Str::uuid(),
                    'label' => 'professor_auxiliar',
                    'name' => 'Professor Auxiliar',
                    'level' => '1.1'
                ],
                [
                    'uid_function' => Str::uuid(),
                    'label' => 'aluno',
                    'name' => 'Aluno',
                    'level' => '1.2'
                ]
            ]);
    }
}
