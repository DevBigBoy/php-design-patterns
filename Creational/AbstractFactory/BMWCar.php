<?php 

declare(strict_types=1);

namespace Creational\AbstractFactory;
use Creational\AbstractFactory\CarInterface;
class BMWCar implements CarInterface{
    private $price;

    public function __construct($price){
        $this->price = $price;
    }

    public function calculatePrice(): float 
    {
        return $this->price + 1000000;
    }
}