<?php

namespace Src\Creational\Builder\GangOfFour;

class Room extends AbstractMapSite
{
    private int $roomNumber;
    private array $sides;

    public function __construct(int $roomNo)
    {
        $this->roomNumber = $roomNo;
    }

    function enter()
    {
        // TODO: Implement enter() method.
    }

    public function getSide(string $direction) : AbstractMapSite
    {
        return $this->sides[$direction];
    }

    public function setSide(string $direction, AbstractMapSite $mapSite) : void
    {
        $this->sides[$direction] = $mapSite;
    }

    public function getRoomNumber() : int
    {
        return $this->roomNumber;
    }

    public function say() : void
    {
        print("I am Room");
    }
}