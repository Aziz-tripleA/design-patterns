<?php
/**
 * Email: aziz.adel.fci@gmail.com
 * User: aziz
 * Date: 11/13/20
 * Time: 4:56 PM
 */

namespace structural\adapter;


class PaperBook implements Book
{
    private $page;
    public function open()
    {
        $this->page = 1;
        // TODO: Implement open() method.
    }

    public function turnPage()
    {
        $this->page ++;
        // TODO: Implement turnPage() method.
    }

    public function getPage(): int
    {
        return $this->page;
        // TODO: Implement getPage() method.
    }
}