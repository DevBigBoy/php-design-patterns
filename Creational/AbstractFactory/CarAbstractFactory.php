<?php 

declare(strict_types=1);
namespace Creational\AbstractFactory;

class CarAbstractFactory {

    private $tax = 10000000;
    private $price;


    public function __construct($price){
        $this->price = $price;
    }

    public function createBMWCar(): BMWCar{
        return new BMWCar($this->price);
    }

    public function createBENZCar(): BenzCar{
        return new BenzCar($this->price, $this->tax);
    }
}