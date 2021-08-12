<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    /**
     * Autorização para uso da request
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Campos obrigatórios
     *
     * @return mixed
     */
    public function rules(): array
    {
        return [

        ];
    }

    /**
     * Menssagem para campos obrigátorios em caso de inexistencia
     *
     * @return mixed
     */
    public function messages(): array
    {
        return [

        ];
    }
}
