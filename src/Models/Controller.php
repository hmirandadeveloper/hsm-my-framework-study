<?php

namespace App\Models;

/**
 * Class Controller
 * @package App\Models
 */
class Controller extends ElectronicItem
{
    /**
     * MAX EXTRA ALLOWED TO THIS OBJECT
     */
    protected $max_extras = 0;

    /**
     * @var
     */
    protected $wired;

    /**
     * Console constructor.
     */
    public function __construct($wired)
    {
        parent::setType(parent::ELECTRONIC_ITEM_EXTRA);
        $this->wired = $wired;
    }

    /**
     * @param $wired
     */
    public function setWired($wired) {
        $this->wired = $wired;
    }

    /**
    * @return
    */
    public function isWired()
    {
        return $this->wired;
    }
}
