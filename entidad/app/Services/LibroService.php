<?php

namespace App\Services; 

use App\Repositories\Interfaces\LibroInterface;

class LibroService
{
    protected $repository;

    public function __construct(LibroInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllLibros()
    {
        return $this->repository->getAllLibros();
    }

    public function getLibroById($id)
    {
        return $this->repository->getLibroById($id);
    }

    public function createLibro(array $data)
    {
        return $this->repository->create($data);
    }

    public function updateLibro($id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function deleteLibro($id)
    {
        return $this->repository->delete($id);
    }
}
