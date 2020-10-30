<?php
/**
 * Created by PhpStorm.
 * User: aziz
 * Date: 30/10/20
 * Time: 22:15
 */

namespace creational\AbstractFactory;


class CarAbstractFactory
{
    private $price;
    private $tax = 10000;
    function __construct($price)
    {
        $this->price = $price;
    }

    public function createBMWCar():BMWCar{
        return new BMWCar($this->price);
    }
    public function createBenzCar():BenzCar{
        return new BenzCar($this->price, $this->tax);
    }

}