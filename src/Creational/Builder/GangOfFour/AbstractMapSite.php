<?php

namespace Src\Creational\Builder\GangOfFour;

abstract class AbstractMapSite
{
    abstract function enter();
    abstract function say() : void;
}