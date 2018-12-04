<?php

namespace App\Models;

/**
 *
 */
class Microwave extends ElectronicItem
{
    /**
     * MAX EXTRA ALLOWED TO THIS OBJECT
     */
    protected $max_extras = 0;

    /**
     * Console constructor.
     * @param float $price
     */
    public function __construct($price)
    {
        parent::setType(parent::ELECTRONIC_ITEM_MICROWAVE);
        parent::setPrice($price);
    }
}
