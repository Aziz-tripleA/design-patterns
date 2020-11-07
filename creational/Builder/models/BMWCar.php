<?php
/**
 * Created by PhpStorm.
 * User: aziz
 * Date: 11/7/20
 * Time: 7:55 PM
 */

namespace creational\Builder\models;


class BMWCar extends Car
{
    private $data = [];

    public function setPart($name , $value)
    {
        $this->data[$name] = $value;
    }
}