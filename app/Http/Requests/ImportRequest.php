<?php

namespace App\Http\Requests;

use App\Exceptions\Config\BaseException;
use App\Exceptions\Config\BuildExceptions;
use App\Exceptions\DefaultException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class ImportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file' => 'required|mimes:xls,csv,xlsx'
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
            'file.required' => "Deve conter o arquivo",
            'file.mimes' => "Arquivo deve conter a extensão 'xls', 'xlsx' ou 'csv'",
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @return void
     *
     * @throws BuildExceptions
     */
    protected function failedValidation(Validator $validator): void
    {
        $exception = new BaseException(
            'FunctionFormResquestError',
            'Encontramos erros nos dados informados.',
            'Verifique se todos os dados foram informados corretamente',
            DefaultException::GENERAL_SUPPORT_MESSAGE,
            Response::HTTP_UNPROCESSABLE_ENTITY,
            $validator->errors()->getMessages()
        );

        throw new BuildExceptions($exception);
    }
}
