<?php

namespace Src\Creational\AbstractFactory\Example1;

class OReillyBookFactory extends AbstractBookFactory {
    private $context = "OReilly";

    public function makePHPBook() : AbstractPHPBook
    {
        return new OReillyPHPBook;
    }

    public function makeMySQLBook() : AbstractMySQLBook
    {
        return new OReillyMySQLBook;
    }
}