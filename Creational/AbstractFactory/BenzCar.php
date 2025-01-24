<?php 

declare(strict_types=1);

namespace Creational\AbstractFactory;
use Creational\AbstractFactory\CarInterface;

class BenzCar implements CarInterface{
    private $price;
    private $tax;

    public function __construct($price, $tax){
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice(): float {
        return $this->price + $this->tax + 6767575;
    }
}