<?php

namespace App\Services;

use App\Repositories\Interfaces\MotoRepositoryInterface;

class MotoService
{
    protected $repository;

    public function __construct(MotoRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function listar()
    {
        return $this->repository->all();
    }

    public function crear(array $data)
    {
        return $this->repository->create($data);
    }

    public function mostrar($id)
    {
        return $this->repository->find($id);
    }

    public function actualizar($id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function eliminar($id)
    {
        return $this->repository->delete($id);
    }
}
