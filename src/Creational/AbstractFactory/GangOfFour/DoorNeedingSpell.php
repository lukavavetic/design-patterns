<?php

namespace Src\Creational\AbstractFactory\GangOfFour;

class DoorNeedingSpell extends Door
{
    public function say() : void
    {
        print("I am DoorNeedingSpell");
    }
}