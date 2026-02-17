<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // 🔥 Permitir la petición
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $isUpdate = $this->isMethod('put') || $this->isMethod('patch');

        return [
            'titulo' => $isUpdate 
                ? 'sometimes|string|max:255' 
                : 'required|string|max:255',

            'autor' => $isUpdate 
                ? 'sometimes|string|max:255' 
                : 'required|string|max:255',

            'descripcion' => $isUpdate 
                ? 'sometimes|string' 
                : 'required|string',

            // 🔥 Mejor validación para año
            'anio' => $isUpdate 
                ? 'sometimes|digits:4' 
                : 'required|digits:4',

            'genero' => $isUpdate 
                ? 'sometimes|string|max:255' 
                : 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'El título es obligatorio.',
            'autor.required' => 'El autor es obligatorio.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'anio.required' => 'El año es obligatorio.',
            'genero.required' => 'El género es obligatorio.',

            'anio.digits' => 'El año debe tener exactamente 4 dígitos.',

            'titulo.max' => 'El título no puede tener más de 255 caracteres.',
            'autor.max' => 'El autor no puede tener más de 255 caracteres.',
            'genero.max' => 'El género no puede tener más de 255 caracteres.',

            'descripcion.string' => 'La descripción debe ser una cadena de texto.',
            'titulo.string' => 'El título debe ser una cadena de texto.',
            'autor.string' => 'El autor debe ser una cadena de texto.',
            'genero.string' => 'El género debe ser una cadena de texto.',
        ];
    }
}
