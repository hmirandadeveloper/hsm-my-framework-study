<?php

namespace App\Models;

class Television extends ElectronicItem
{
    /**
     * MAX EXTRA ALLOWED TO THIS OBJECT
     */
    protected $max_extras = INF;

    /**
     * Television constructor.
     * @param float $price
     */
    public function __construct($price)
    {
        parent::setType(parent::ELECTRONIC_ITEM_TELEVISION);
        parent::setPrice($price);
    }
}
