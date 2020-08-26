<?php

namespace Src\Creational\AbstractFactory;

abstract class AbstractBook {
    abstract function getAuthor() : string;
    abstract function getTitle() : string;
}