<?php
/**
 * Created by PhpStorm.
 * User: aziz
 * Date: 11/7/20
 * Time: 7:58 PM
 */

use creational\Builder\BENZCarBuilder;
use creational\Builder\BMWCarBuilder;
use creational\Builder\CarProducer;
use creational\Builder\models\BENZCar;
use creational\Builder\models\BMWCar;
use PHPUnit\Framework\TestCase;

class CarBuilderTest extends TestCase
{
    public function testProduceBENZCar()
    {
        $benz = new BENZCarBuilder();
        $car_producer = new CarProducer($benz);
        $myCar = $car_producer->CarProduce();
        $this->assertInstanceOf(BENZCar::class, $myCar);
    }

    public function testProduceBMWCar()
    {
        $car_producer = new CarProducer(new BMWCarBuilder());
        $myCar = $car_producer->CarProduce();
        $this->assertInstanceOf(BMWCar::class, $myCar);
    }
}
