<?php

namespace Src\Creational\AbstractFactory\GangOfFour;

class Wall extends AbstractMapSite
{
    public function __construct()
    {

    }

    function enter()
    {
        // TODO: Implement enter() method.
    }

    public function say() : void
    {
        print("I am Wall");
    }
}