<?php
/**
 * Created by PhpStorm.
 * User: aziz
 * Date: 11/7/20
 * Time: 8:06 PM
 */

namespace creational\Builder;


use creational\Builder\models\BENZCar;
use creational\Builder\models\Car;

class BENZCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BENZCar();
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart('Door', 'door_Benz');
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('Engine', 'engine_Benz');
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('Wheel', 'wheel_Benz');
    }

    /**
     * @return Car
     */
    public function getCar():Car
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}