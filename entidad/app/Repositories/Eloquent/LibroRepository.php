<?php

namespace App\Repositories\Eloquent;

use App\Models\Libro;
use App\Repositories\Interfaces\LibroInterface;

class LibroRepository implements LibroInterface
{
    public function getAllLibros()
    {
        return Libro::all();
    }

    public function getLibroById($id)
    {
        return Libro::find($id);
    }

    public function create(array $data)
    {
        return Libro::create($data);
    }

    public function update($id, array $data)
    {
        $libro = Libro::find($id);

        if ($libro) {
            $libro->update($data);
            return $libro;
        }

        return null;
    }

    public function delete($id)
    {
        $libro = Libro::find($id);

        if ($libro) {
            return $libro->delete();
        }

        return false;
    }
}
