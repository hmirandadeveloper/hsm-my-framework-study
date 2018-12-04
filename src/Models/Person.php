<?php

namespace App\Models;


use App\Models\ElectronicItem;
use App\Models\ElectronicItems;

/**
 * Class Person
 * @package App
 */
class Person
{
    /**
     * @var
     */
    private $name;

    /**
     * @var ElectronicItems
     */
    private $electronicItems;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * @param ElectronicItems $items
     */
    public function setElectronicItems(ElectronicItems $items)
    {
        $this->electronicItems = $items;
    }

    /**
     * @return ElectronicItems
     */
    public function getElectronicItems()
    {
        return $this->electronicItems;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;   
    }
}
