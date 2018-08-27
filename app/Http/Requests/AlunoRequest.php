<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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

    public function messages()
    {
        return [
            'nome.required'=> 'Este campo é obrigatório!',
            'nome.max'=> 'Este campo deve ser preenchido em até 255 caracteres.',
            'cpf.required'=> 'Este campo é obrigatório!',
            'cpf.max'=> 'Este campo deve ser preenchido com 11 números.',
            'cpf.unique'=> 'Este CPF já foi cadastrado.',
            'cidade.required'=> 'Este campo é obrigatório!',
            'cidade.max'=> 'Este campo deve ser preenchido em até 255 caracteres.',
            'email.required'=> 'Este campo é obrigatório!',
            'email.max'=> 'Este campo deve ser preenchido em até 255 caracteres.',
            'email.unique'=> 'Este e-mail já foi cadastrado.',
            'email.email' => 'Formato de e-mail invalido.',
            'telefone.max' => 'Este campo deve ser preenchido com 14 números.'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=> 'required|max:255',
            'cpf'=> 'required|max:11|unique',
            'cidade' => 'required|max:255',
            'email' => 'required|max:255|unique|email',
            'telefone' => 'max:14'
        ];
    }
}
