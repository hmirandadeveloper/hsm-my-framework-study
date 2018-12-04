<?php

use App\Models\Console;
use App\Models\Controller;
use App\Models\ElectronicItems;
use App\Models\Microwave;
use App\Models\Television;

class ElectronicItemTest extends \PHPUnit_Framework_TestCase {


    /**
    * @test
    */
    public function test_instantiate_console()
    {
        $console = new Console(100.00);

        $this->assertEquals('console', $console->getType());
        $this->assertEquals(100.00, $console->getPrice());
    }


    /**
    * @test
    */
    public function test_instantiate_controller()
    {
        $controller = new Controller(true);

        $this->assertTrue($controller->isWired());
    }

    /**
    * @test
    */
    public function test_instantiate_microwave()
    {
        $microwave = new Microwave(99.99);

        $this->assertEquals('microwave', $microwave->getType());
        $this->assertEquals(99.99, $microwave->getPrice());
    }

    /**
    * @test
    */
    public function test_instantiate_television()
    {
        $television = new Television(500.00);

        $this->assertEquals('television', $television->getType());
        $this->assertEquals(500.00, $television->getPrice());
    }

    /**
    * @test
    */
    public function test_add_extras_to_console()
    {
        $console = new Console(100.00);

        $controller1 = new Controller(true);
        $controller2 = new Controller(false);
        $controller3 = new Controller(true);
        $controller4 = new Controller(false);

        $console->addExtras(new ElectronicItems([$controller1, $controller2, $controller4, $controller4]));

        $this->assertEquals(4, count($console->getExtras()));
    }
}