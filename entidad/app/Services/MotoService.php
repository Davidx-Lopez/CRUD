<?php

namespace App\Repositories\Eloquent;

use App\Models\Moto;
use App\Repositories\Interfaces\MotoRepositoryInterface;

class MotoRepository implements MotoRepositoryInterface
{
    public function all()
    {
        return Moto::all();
    }

    public function find($id)
    {
        return Moto::find($id);
    }

    public function create(array $data)
    {
        return Moto::create($data);
    }

    public function update($id, array $data)
    {
        $moto = Moto::find($id);

        if ($moto) {
            $moto->update($data);
            return $moto;
        }

        return null;
    }

    public function delete($id)
    {
        $moto = Moto::find($id);

        if ($moto) {
            return $moto->delete();
        }

        return false;
    }
}
