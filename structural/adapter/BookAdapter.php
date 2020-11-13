<?php
/**
 * Email: aziz.adel.fci@gmail.com
 * User: aziz
 * Date: 11/13/20
 * Time: 5:17 PM
 */
/*declare(strict_types=1);*/
namespace structural\adapter;
use structural\adapter\eBook;

class BookAdapter implements Book
{
    private $eBook;
    function __construct(eBook $eBook)
    {
        $this->eBook = $eBook;
    }

    public function open()
    {
        $this->eBook->unlock();
        // TODO: Implement open() method.
    }

    public function turnPage()
    {
        $this->eBook->nextPage();
        // TODO: Implement turnPage() method.
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
        // TODO: Implement getPage() method.
    }
}