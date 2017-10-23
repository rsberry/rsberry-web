<?php

namespace App;

class InventorySlot
{
    public function __construct(Item $item, $quantity)
    {
        $this->item = $item;
        $this->quantity = $quantity;
    }

    public function __get($name)
    {
        if ($name === 'item') {
            return $this->item;
        }

        if ($name === 'quantity') {
            return $this->quantity;
        }

        // TODO Throw exception
    }
}
