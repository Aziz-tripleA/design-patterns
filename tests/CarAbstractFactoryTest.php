<?php
/**
 * Created by PhpStorm.
 * User: aziz
 * Date: 30/10/20
 * Time: 23:31
 */

use creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class CarAbstractFactoryTest extends TestCase
{
    public function testCanCreateBMWCar(){
        $carFactory = new CarAbstractFactory(10000);
        $myCar = $carFactory->createBMWCar();

        $this->assertInstanceOf(\creational\AbstractFactory\BMWCar::class, $myCar);

    }
    public function testCanCreateBenzCar(){
        $carFactory = new CarAbstractFactory(10000);
        $myCar = $carFactory->createBenzCar();

        $this->assertInstanceOf(\creational\AbstractFactory\BenzCar::class, $myCar);

    }
}
