<?php

namespace Src\Creational\AbstractFactory\Example1;

class SamsBookFactory extends AbstractBookFactory {
    private $context = "Sams";

    public function makePHPBook() : AbstractPHPBook
    {
        return new SamsPHPBook;
    }

    public function makeMySQLBook() : AbstractMySQLBook
    {
        return new SamsMySQLBook;
    }
}