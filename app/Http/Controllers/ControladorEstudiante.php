<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Http\Requests\RequestEstudiante;
use Illuminate\Support\Facades\Validator;

class ControladorEstudiante extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();

        return response()->json([
            'status' => 'success',
            'data' => $estudiantes
        ], 200);
    }

    public function show($id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante) {
            return response()->json([
                'status' => 'error',
                'message' => 'Estudiante no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $estudiante
        ], 200);
    }

    public function store(RequestEstudiante $request)
    {
        $estudiante = Estudiante::create($request->validated());

        if (!$estudiante) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error al crear el estudiante'
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'data' => $estudiante
        ], 201);

    }

    public function update(RequestEstudiante $request, $id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante) {
            return response()->json([
                'status' => 'error',
                'message' => 'Estudiante no encontrado'
            ], 404);
        }

        $estudiante->update($request->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Estudiante actualizado',
            'data' => $estudiante
        ], 200);
    }

    public function partialUpdate(RequestEstudiante $request, $id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante) {
            return response()->json([
                'status' => 'error',
                'message' => 'Estudiante no encontrado'
            ], 404);
        }

        $estudiante->update($request->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Estudiante actualizado parcialmente',
            'data' => $estudiante
        ], 200);
    }

    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante) {
            return response()->json([
                'status' => 'error',
                'message' => 'Estudiante no encontrado'
            ], 404);
        }
        $estudiante->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Estudiante eliminado'
        ], 200);
    }
}
