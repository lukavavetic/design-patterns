<?php

namespace Src\Creational\AbstractFactory\GangOfFour;

class Maze
{
    private array $rooms;

    public function __construct()
    {

    }

    public function addRoom(Room $room) : void
    {
        $this->rooms[] = $room;
    }

    public function roomNo(int $no) : Room
    {
        return $this->rooms[$no];
    }

    public function getRooms() : array
    {
        return $this->rooms;
    }
}