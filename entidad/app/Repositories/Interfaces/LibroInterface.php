<?php 

namespace App\Repositories\Interfaces;

interface LibroInterface

{
    public function getAllLibros();
    public function getLibroById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}