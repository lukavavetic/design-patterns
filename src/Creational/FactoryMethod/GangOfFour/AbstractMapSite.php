<?php

namespace Src\Creational\FactoryMethod\GangOfFour;

abstract class AbstractMapSite
{
    abstract function enter();
    abstract function say() : void;
}