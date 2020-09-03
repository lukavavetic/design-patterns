<?php

namespace Src\Creational\FactoryMethod\Example2;

abstract class AbstractFactoryMethod {
    abstract function makePHPBook(string $param) : AbstractPHPBook;
}