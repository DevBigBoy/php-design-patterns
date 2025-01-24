<?php

declare(strict_types=1);

namespace Tests;

use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;
class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBMWCar() {
        $carFactory = new CarAbstractFactory(343434);
        $myCar = $carFactory->createBMWCar();
        
        $this->assertInstanceOf(BMWCar::class, $myCar);
    }
}
