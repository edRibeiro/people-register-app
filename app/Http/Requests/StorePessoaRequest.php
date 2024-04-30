<?php

namespace App\Http\Requests;

use App\Enums\EstadoCivil;
use App\Enums\Sexo;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePessoaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required'],
            'cpf' => ['required', 'cpf', 'cpf_format', 'unique:pessoas,cpf'],
            'data_nascimento' => ['required', 'date'],
            'sexo' => ['required', Rule::enum(Sexo::class)],
            'estado_civil' => ['required', Rule::enum(EstadoCivil::class)],
            'nome_pai' => ['nullable'],
            'nome_mae' => ['nullable'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'cpf' => 'O CPF fornecido não é válido.',
            'cpf_format' => 'O formato do CPF fornecido não é válido.',
            'unique' => 'O :attribute já está sendo utilizado.',
            'date' => 'O campo :attribute deve ser uma data válida.',
            'enum' => 'O :attribute selecionado não é válido.',
        ];
    }
}
