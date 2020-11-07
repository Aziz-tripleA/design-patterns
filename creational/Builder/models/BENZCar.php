<?php
/**
 * Created by PhpStorm.
 * User: aziz
 * Date: 11/7/20
 * Time: 8:00 PM
 */

namespace creational\Builder\models;


class BENZCar extends Car
{
    private $data = [];

    public function setPart($name , $value)
    {
        $this->data[$name] = $value;
    }
}