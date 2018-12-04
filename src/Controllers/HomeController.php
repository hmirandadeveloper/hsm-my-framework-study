<?php

namespace App\Controllers;

use App\View;
use App\Models\Controller;
use App\Models\Console;
use App\Models\Microwave;
use App\Models\Television;
use App\Models\Person;
use App\Models\ElectronicItems;
use App\Traits\HomeHelpersTrait;

class HomeController extends BaseController
{
use HomeHelpersTrait;

    public function __construct()
    {
        parent::__construct(new View());
    }

    public function indexAction()
    {

        // TEST SCENARIO
        $person = new Person('John Doe');

        $console = new Console(400.00);

        $console->addExtras(new ElectronicItems([
            new Controller(true),
            new Controller(true),
            new Controller(false),
            new Controller(false)
        ]));

        $tv1 = new Television(1300.00);
        $tv1->addExtras(new ElectronicItems([
            new Controller(false),
            new Controller(false)
        ]));

        $tv2 = new Television(1200.00);
        $tv2->addExtras(new ElectronicItems([
            new Controller(false)
        ]));

        $microwave = new Microwave(250.00);

        $items = new ElectronicItems([$console, $tv1, $tv2, $microwave]);

        $person->setElectronicItems($items);

        $sortedItems = $person->getElectronicItems()->getSortedItems(SORT_NUMERIC);
        $totalPrice = $person->getElectronicItems()->getTotal();

        $content = $this->renderItemsTable($sortedItems, $totalPrice);


        return parent::getView(
            __METHOD__,
            [
                'title'       => APP_NAME.' - Home',
                'header'      => 'Welcome to '.APP_NAME,
                'content'     => $content
            ]
        );

    }
}
