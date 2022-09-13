<?php

namespace App\Http\Requests;

use App\Exceptions\Config\BaseException;
use App\Exceptions\Config\BuildExceptions;
use App\Exceptions\DefaultException;
use GuzzleHttp\Exception\TransferException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class AcademyTrainingRequest extends FormRequest
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
            'name' => 'required',
            'fantasy_name' => 'required',
            'cnpj' => 'required'
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
            'name.required' => "Nome da academia é obrigatório",
            'fantasy_name.required' => "Nome fantasia da academia é obrigatório",
            'cnpj.required' => "CNPJ da academia é obrigatório"
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
            'AcademyTrainingFormResquestError',
            'Encontramos erros nos dados informados.',
            'Verifique se todos os dados foram informados corretamente',
            DefaultException::GENERAL_SUPPORT_MESSAGE,
            Response::HTTP_UNPROCESSABLE_ENTITY,
            $validator->errors()->getMessages()
        );

        throw new BuildExceptions($exception);
    }
}
