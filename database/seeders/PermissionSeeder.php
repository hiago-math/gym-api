<?php

namespace Database\Seeders;

use App\Models\Permissions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permissions::query()->insert([
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Criar Usuários',
                'label' => 'create_user',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Editar Usuários',
                'label' => 'edit_user',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Desativar Usuários',
                'label' => 'destroy_user',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Atualizar Usuários',
                'label' => 'update_user',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Listar Meus Usuários',
                'label' => 'list_my_user',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Listar Todos Usuários',
                'label' => 'list_all_user',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Criar Equipamentos',
                'label' => 'create_equipment',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Editar Equipamentos',
                'label' => 'edit_equipment',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Desativar Equipamentos',
                'label' => 'destroy_equipment',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Listar Equipamentos',
                'label' => 'list_equipment',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Criar Treinos',
                'label' => 'create_workout',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Editar Treinos',
                'label' => 'edit_workout',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Desativar Treinos',
                'label' => 'destroy_workout',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Atualizar Treinos',
                'label' => 'update_workout',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Listar Treinos',
                'label' => 'list_workout',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Criar Academias',
                'label' => 'create_academy',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Editar Academias',
                'label' => 'edit_academy',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Desativar Academias',
                'label' => 'destroy_academy',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Atualizar Academias',
                'label' => 'update_academy',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Listar Academias',
                'label' => 'list_academy',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Criar Funções',
                'label' => 'create_function',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Editar Funções',
                'label' => 'edit_function',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Desativar Funções',
                'label' => 'destroy_function',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Atualizar Funções',
                'label' => 'update_function',
                'description' => null
            ],
            [
                'uid_permission' => Str::uuid(),
                'name' => 'Listar Funções',
                'label' => 'list_function',
                'description' => null
            ],
        ]);
    }
}
