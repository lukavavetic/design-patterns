<?php

namespace Src\Creational\AbstractFactory\Example1;

abstract class AbstractBook {
    abstract function getAuthor() : string;
    abstract function getTitle() : string;
}