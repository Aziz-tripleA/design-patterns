<?php
/**
 * Created by PhpStorm.
 * User: aziz
 * Date: 30/10/20
 * Time: 22:06
 */

namespace creational\AbstractFactory;


class BenzCar implements CarInterface
{
    private $price;
    private $tax;
    function __construct($price,$tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function CalculatePrice()
    {
        return $this->price + $this->tax;
    }
}