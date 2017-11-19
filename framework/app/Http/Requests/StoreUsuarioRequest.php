<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
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
            'usuario' => 'required|unique:usuarios,usuario|max:255',
            'clave' => 'required|max:255',
            'edad' => 'required|numeric|between:18,999',
        ];
    }
}
