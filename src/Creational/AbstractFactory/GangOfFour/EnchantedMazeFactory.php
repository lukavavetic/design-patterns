<?php

namespace Src\Creational\AbstractFactory\GangOfFour;

class EnchantedMazeFactory extends MazeFactory
{
    public function makeRoom(int $n) : Room
    {
        return new EnchantedRoom($n);
    }

    public function makeDoor(Room $r1, Room $r2) : Door
    {
        return new DoorNeedingSpell($r1, $r2);
    }
}