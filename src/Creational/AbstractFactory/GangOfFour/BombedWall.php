<?php

namespace Src\Creational\AbstractFactory\GangOfFour;

class BombedWall extends Wall
{
    function enter()
    {
        // TODO: Implement enter() method.
    }

    public function say() : void
    {
        print("I am BombedWall");
    }
}