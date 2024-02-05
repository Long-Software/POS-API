<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface ModelInterface
{
    public function all();

    public function find($id);

    public function create(array $data);

    public function update($model, array $data);

    public function delete($model);
}
