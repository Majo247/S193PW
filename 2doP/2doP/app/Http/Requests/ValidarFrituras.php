<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFrituras extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    //Cambiar a berddadero
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
            'Nombre'=>'required',
            'Sabor'=>'required|string',
            'Peso'=>'required|min:1|numeric'
        ];
    }
}
