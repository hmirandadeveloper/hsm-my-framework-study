<?php

namespace App\Models;

/**
 * Class Console
 * @package App\Models
 */
class Console extends ElectronicItem
{
    /**
     * MAX EXTRA ALLOWED TO THIS OBJECT
     */
    protected $max_extras = 4;

    /**
     * Console constructor.
     * @param float $price
     */
    public function __construct($price)
    {
        parent::setType(parent::ELECTRONIC_ITEM_CONSOLE);
        parent::setPrice($price);
    }
}
