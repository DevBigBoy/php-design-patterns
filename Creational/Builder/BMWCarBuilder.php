<?php

declare(strict_types=1);

namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car
     */
    private $type;

    public function createCar() {
        $this->type = new BMWCar();
    }

    public function addEngine() {
        $this->type->setPart('engine','Hello From engine');
    } 

    public function addDoors() {
        $this->type->setPart('door','Hello From door');
    }

    public function addBody() {
        $this->type->setPart('body','Hello From Body');
    }

    public function addWheel() {
        $this->type->setPart('wheel','Hello From wheel');
    }

    public function getCar():Car {
        return $this->type;
    }
}
