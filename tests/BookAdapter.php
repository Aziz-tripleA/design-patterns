<?php
/**
 * Email: aziz.adel.fci@gmail.com
 * User: aziz
 * Date: 11/13/20
 * Time: 5:26 PM
 */

use PHPUnit\Framework\TestCase;
use structural\adapter\kindleEBook;
use structural\adapter\PaperBook;


class BookAdapter extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();
        $this->assertSame(2,$book->getPage());
    }

    public function testCanTurnPageOnEBook()
    {
        $kindle = new kindleEBook();
        $book = new structural\adapter\BookAdapter($kindle);
        $book->open();
        $book->turnPage();
        $this->assertSame(2,$book->getPage());
    }
}
