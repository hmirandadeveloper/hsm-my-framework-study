<?php

namespace App\Controllers;

use App\View;

class BaseController
{
    private $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function getView($controller, array $variables = [])
    {
        return $this->view->getView($controller, $variables);
    }
}
