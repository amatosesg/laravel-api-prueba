<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RequestEstudiante extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('id');

        $reglas = [
            'nombre' => 'required|string|min:5|max:60',
            'email' => 'required|email|unique:estudiantes,email,' . $id,
            'telefono' => 'required|string',
            'direccion' => 'nullable|string|max:255',
            'dni' => 'nullable|string|max:9'
        ];

        // Si el método es patch, se cambia la regla de required por sometimes|required
        // Para permitir actualizar solo algunos campos y no todos
        if ($this->isMethod('patch')) {
            foreach($reglas as $campo => $regla) {
                if (str_contains($regla, 'required')) {
                    $reglas[$campo] = str_replace('required', 'sometimes|required', $regla);
                }
            }
        }

        return $reglas;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status' => 'error',
                'message' => 'Error de validación',
                'errors' => $validator->errors()
            ], 422)
        );
    }
}
