<?php

namespace Src\Creational\FactoryMethod\GangOfFour;

class Door extends AbstractMapSite
{
    private Room $r1;
    private Room $r2;
    private bool $isOpen;

    public function __construct(Room $r1, Room $r2)
    {
        $this->r1 = $r1;
        $this->r2 = $r2;
    }

    function enter()
    {
        // TODO: Implement enter() method.
    }

    public function otherSideFrom(Room $room) : Room
    {

    }

    public function say() : void
    {
        print("I am Door");
    }
}