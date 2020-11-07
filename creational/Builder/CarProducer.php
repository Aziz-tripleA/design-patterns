<?php
/**
 * Created by PhpStorm.
 * User: aziz
 * Date: 11/7/20
 * Time: 8:30 PM
 */

namespace creational\Builder;


use creational\Builder\models\Car;

class CarProducer
{
    /**
     * @var CarBuilderInterface $builder
     */
    private $builder;
    function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @return Car
     */
    public function CarProduce():Car
    {
        $this->builder->createCar();
        $this->builder->addDoors();
        $this->builder->addEngine();
        $this->builder->addWheel();
        return $this->builder->getCar();
    }
}