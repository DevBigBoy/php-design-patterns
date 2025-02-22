<?php

declare(strict_types=1);

namespace Creational\Builder\Models;

class BENZCar extends Car
{
    private $data = [];
    public function setPart($name, $value)
    {
        $this->data[$name] = $value;
    }
}
