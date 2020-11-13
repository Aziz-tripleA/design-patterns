<?php

/**
 * Email: aziz.adel.fci@gmail.com
 * User: aziz
 * Date: 11/13/20
 * Time: 4:53 PM
 */
namespace structural\adapter;
interface Book
{
    public function open();

    public function turnPage();

    public function getPage():int;
}