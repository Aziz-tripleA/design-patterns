<?php
/**
 * Created by PhpStorm.
 * User: aziz
 * Date: 11/7/20
 * Time: 5:55 PM
 */

namespace creational\Builder;


use creational\Builder\models\Car;

interface CarBuilderInterface
{
    /*
     * create car process
     * **add doors
     * **add engine
     * . . .. .........
     */
    public function createCar();
    public function addDoors();
    public function addEngine();
    public function addWheel();
    public function getCar():Car;

}