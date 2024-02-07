<?php

namespace App\Services;

use App\Contracts\TemperatureServiceInterface;
use App\Models\Temperatures;

class TemperatureService implements TemperatureServiceInterface
{

    public function getAll()
    {
        return Temperatures::all();
    }

    public function findById($id)
    {
        return Temperatures::findOrFail($id);
    }

    public function create(array $data)
    {
        return Temperatures::create($data);
    }

    public function update($id, array $data)
    {
        $entity = Temperatures::findOrFail($id);
        $entity->update($data);
        return $entity;
    }

    public function delete($id)
    {
        $entity = Temperatures::findOrFail($id);
        $entity->delete();
        return $entity;
    }
}
