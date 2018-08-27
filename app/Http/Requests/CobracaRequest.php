<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CobracaRequest extends FormRequest
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
            'banco.required'=> 'Este campo é obrigatório!',
            'banco.max'=> 'Este campo deve ser preenchido em até 255 caracteres.',
            'agencia.required'=> 'Este campo é obrigatório!',
            'agencia.max'=> 'Este campo deve ser preenchido com 4 números.',
            'conta.required'=> 'Este campo é obrigatório!',
            'cidade.max'=> 'Este campo deve ser preenchido em até 7 números.'
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
            'banco'=> 'required|max:255',
            'agencia'=> 'required|max:4',
            'conta' => 'required|max:7'
        ];
    }
}
