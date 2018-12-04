<?php

namespace App\Models;

class ElectronicItems {

    private $items = array();

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getTotal()
    {
        $total = 0;

        foreach($this->items as $item) {
            $total += $item->getPrice();
        }

        return $total;

    }

    public function getItems()
    {
        return $this->items;
    }

    public function getSortedItems($type) {
        $sorted = array();

        foreach ($this->items as $item) {
            $sorted[($item->getPrice() * 100)] = $item;
        }

        ksort($sorted, $type);

        return $sorted;
    }

    /**
     *
     * @param string $type
     * @return array
     */
    public function getItemsByType($type) {

        if (in_array($type, ElectronicItem::$types)) {

            $callback = function ($item) use ($type) {
                return $item->type == $type;
            };

            return array_filter($this->items, $callback);
        }

        return false;
    }
}
