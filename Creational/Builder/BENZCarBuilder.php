<?php

namespace Creational\Builder;

use Creational\Builder\Models\BENZCar;

class BENZCarBuilder implements CarBuilderInterface
{
    private $type;
    public function createCar() {
        $this->type = new BENZCar();
    }

    public function addEngine() {}

    public function addDoors() {}

    public function addBody() {}

    public function addWheel() {}

    public function getCar() {}
}
