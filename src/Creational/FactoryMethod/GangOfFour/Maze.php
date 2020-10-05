<?php

namespace Src\Creational\FactoryMethod\GangOfFour;

class Maze
{
    private array $rooms = [];

    public function __construct()
    {

    }

    public function addRoom(Room $room) : void
    {
        $this->rooms[$room->getRoomNumber()] = $room;
    }

    public function roomNo(int $no) : ?Room
    {
        return isset($this->rooms[$no]) ? $this->rooms[$no]: null;
    }

    public function getRooms() : array
    {
        return $this->rooms;
    }
}