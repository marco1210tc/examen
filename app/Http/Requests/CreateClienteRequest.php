<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
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
            'nombre' => 'required',
            'email' => 'required',          
            'direccion' => 'required',              
            'fono' => 'required',              
        ];
    }

    public function messages() {
        return [
            'nombre' => 'El campo nombres es obligatorio', 
            'email' => 'El campo email es obligatorio',             
            'direccion' => 'El campo direccion es obligatorio',           
            'fono' =>  'El campo fono es obligatorio',              

        ];
    }
}
