<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LibroService;
use App\Http\Requests\LibroRequest;

class LibroController extends Controller
{
    protected $libroService;

    public function __construct(LibroService $libroService)
    {
        $this->libroService = $libroService;
    }

    public function index()
    {
        $libros = $this->libroService->getAllLibros();
        return response()->json($libros);
    }

    public function show($id)
    {
        $libro = $this->libroService->getLibroById($id);

        if ($libro) {
            return response()->json($libro);
        }

        return response()->json(['message' => 'Libro no encontrado'], 404);
    }

    public function store(LibroRequest $request)
    {
        $data = $request->validated();
        $libro = $this->libroService->createLibro($data);

        return response()->json($libro, 201);
    }

    public function update(LibroRequest $request, $id)
    {
        $data = $request->validated();
        $libro = $this->libroService->updateLibro($id, $data);

        if ($libro) {
            return response()->json($libro);
        }

        return response()->json(['message' => 'Libro no encontrado'], 404);
    }

    public function destroy($id)
    {
        $deleted = $this->libroService->deleteLibro($id);

        if ($deleted) {
            return response()->json(['message' => 'Libro eliminado']);
        }

        return response()->json(['message' => 'Libro no encontrado'], 404);
    }
}