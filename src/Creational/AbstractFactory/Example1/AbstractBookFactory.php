<?php

namespace Src\Creational\AbstractFactory\Example1;

abstract class AbstractBookFactory {
    abstract function makePHPBook() : AbstractPHPBook;
    abstract function makeMySQLBook() : AbstractMySQLBook;
}