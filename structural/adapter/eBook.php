<?php
/**
 * Email: aziz.adel.fci@gmail.com
 * User: aziz
 * Date: 11/13/20
 * Time: 5:01 PM
 */

namespace structural\adapter;


interface eBook
{
    public function unlock();

    public function nextPage();

    /**
     * return 1 of 100 [1,100]
     * @return array
     */
    public function getPage():array ;
}