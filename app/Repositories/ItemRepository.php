<?php

namespace App\Repositories;

use App\Interfaces\ModelInterface;
use App\Models\Item;

class ItemRepository implements ModelInterface
{

    public function all()
    {
        return Item::all();
    }

    public function find($id)
    {
        return Item::find($id);
    }

    public function create(array $data)
    {
        return Item::create($data);
    }

    public function update($item, array $data)
    {
        $item->update($data);
        return $item;
    }

    public function delete( $item)
    {
        $item->delete();
    }
}
