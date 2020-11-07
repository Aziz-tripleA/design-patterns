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

    /**
     * CarAbstractFactory constructor.
     * @param $price
     */
    function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * @return BMWCar
     */
    public function createBMWCar():BMWCar{
        return new BMWCar($this->price);
    }

    /**
     * @return BenzCar
     */
    public function createBenzCar():BenzCar{
        return new BenzCar($this->price, $this->tax);
    }

}