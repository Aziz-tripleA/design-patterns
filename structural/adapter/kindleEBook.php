<?php
/**
 * Email: aziz.adel.fci@gmail.com
 * User: aziz
 * Date: 11/13/20
 * Time: 5:04 PM
 */

namespace structural\adapter;


class kindleEBook implements eBook
{
    private $page = 1;
    private $totalPages = 100;
    public function unlock()
    {
        // TODO: Implement unlock() method.
    }

    public function nextPage()
    {
        $this->page++;
        // TODO: Implement nextPage() method.
    }

    /**
     * return 1 of 100 [1,100]
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page,$this->totalPages];
        // TODO: Implement getPage() method.
    }
}