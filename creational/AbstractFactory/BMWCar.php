<?php
/**
 * Created by PhpStorm.
 * User: aziz
 * Date: 30/10/20
 * Time: 22:01
 */

namespace creational\AbstractFactory;


class BMWCar implements CarInterface
{
    private $price;
    function __construct($price)
    {
        $this->price = $price;
    }

    public function CalculatePrice()
    {
        return $this->price+12000;
    }
}