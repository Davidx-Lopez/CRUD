<?php

namespace App\Http\Controllers;

use App\Services\MotoService;
use App\Http\Requests\StoreMotoRequest;

class MotoController extends Controller
{
    protected $service;

    public function __construct(MotoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return response()->json([
            'mensaje' => 'Listado de motos',
            'data' => $this->service->listar()
        ]);
    }

    public function store(StoreMotoRequest $request)
    {
        return response()->json([
            'mensaje' => 'Moto creada correctamente',
            'data' => $this->service->crear($request->validated())
        ], 201);
    }

    public function show($id)
    {
        return response()->json($this->service->mostrar($id));
    }

    public function update(StoreMotoRequest $request, $id)
    {
        return response()->json([
            'mensaje' => 'Moto actualizada',
            'data' => $this->service->actualizar($id, $request->validated())
        ]);
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);

        return response()->json([
            'mensaje' => 'Moto eliminada'
        ]);
    }
}
