<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMotoRequest extends FormRequest
{
    /**
     * Autorizar la petición.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación.
     */
    public function rules(): array
    {
        return [
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'precio' => 'required|numeric|min:0'
        ];
    }

    /**
     * Mensajes personalizados en español.
     */
    public function messages(): array
    {
        return [
            'marca.required' => 'La marca es obligatoria.',
            'marca.string' => 'La marca debe ser un texto.',
            'marca.max' => 'La marca no debe superar los 255 caracteres.',

            'modelo.required' => 'El modelo es obligatorio.',
            'modelo.string' => 'El modelo debe ser un texto.',
            'modelo.max' => 'El modelo no debe superar los 255 caracteres.',

            'anio.required' => 'El año es obligatorio.',
            'anio.integer' => 'El año debe ser un número entero.',
            'anio.min' => 'El año debe ser mayor o igual a 1900.',
            'anio.max' => 'El año no puede ser mayor al año actual.',

            'precio.required' => 'El precio es obligatorio.',
            'precio.numeric' => 'El precio debe ser un número.',
            'precio.min' => 'El precio no puede ser negativo.'
        ];
    }
}
