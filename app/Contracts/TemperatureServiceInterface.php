<?php

namespace App\Contracts;

interface TemperatureServiceInterface
{
    public function getAll();
    public function findById($id); // Kein Route-Model-Binding da id verwendet wird.
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);

}
