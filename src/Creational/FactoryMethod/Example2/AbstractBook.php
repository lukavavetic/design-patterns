<?php

namespace Src\Creational\FactoryMethod\Example2;

abstract class AbstractBook {
    abstract function getAuthor() : string;
    abstract function getTitle(): string;
}