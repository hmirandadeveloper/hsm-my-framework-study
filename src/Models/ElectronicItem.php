<?php

namespace App\Models;

abstract class ElectronicItem {

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var array
     */
    protected $extras = [];
    /**
     * @var
     */
    protected $max_extras = 0;

    /**
     *
     */
    const ELECTRONIC_ITEM_TELEVISION = 'television';
    /**
     *
     */
    const ELECTRONIC_ITEM_CONSOLE = 'console';
    /**
     *
     */
    const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
    /**
     *
     */
    const ELECTRONIC_ITEM_EXTRA = 'extra';

    /**
     * @var array
     */
    public static $types = array(
        self::ELECTRONIC_ITEM_CONSOLE,
        self::ELECTRONIC_ITEM_MICROWAVE,
        self::ELECTRONIC_ITEM_TELEVISION,
        self::ELECTRONIC_ITEM_EXTRA
    );

    /**
     * @param ElectronicItems $extras
     * @return bool
     * @throws \Exception
     */
    public function maxExtras(ElectronicItems $extras)
    {
        if (count(array_merge($this->extras, $extras->getItems())) > $this->max_extras){
            throw new \Exception('Maximum number of extras has been reached');
        }

        return true;
    }

    /**
     * @return float
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param $price
     */
    public function setPrice($price) {
        $this->price = $price;
    }

    /**
     * @param $type
     */
    public function setType($type) {
        $this->type = $type;
    }


    /**
     * @return array
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @return bool
     */
    public function hasExtras()
    {
        return count($this->extras) > 0;
    }

    /**
     * @param ElectronicItems $items
     * @return string
     */
    public function addExtras(ElectronicItems $items)
    {
        $this->maxExtras($items);
        $this->extras = array_merge($this->extras, $items->getItems());
    }

    /**
     * @return string
     */
    public function printElectronicInfo()
    {
        return $this->getType() . " - Price: $ " . $this->getPrice() . " \n ";
    }

}
