<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorPrenda extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Nombre' => 'required|string',
            'Color' => 'required|string',
            'Cantidad' => 'required|numeric|min:1'
        ];
    }
}
