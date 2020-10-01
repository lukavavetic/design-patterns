<?php

namespace Src\Creational\Builder\GangOfFour;

class StandardMazeBuilder extends MazeBuilder
{
    private Maze $maze;

    public function __construct()
    {
        $this->maze = new Maze();
    }

    public function buildMaze(): void
    {
        $this->maze = new Maze();
    }

    public function buildRoom(int $no): void
    {
        if (! $this->maze->roomNo($no)) {
            $room = new Room($no);

            $room->setSide(DirectionEnum::NORTH, new Wall());
            $room->setSide(DirectionEnum::EAST, new Wall());
            $room->setSide(DirectionEnum::SOUTH, new Wall());
            $room->setSide(DirectionEnum::WEST, new Wall());

            $this->maze->addRoom($room);
        }
    }

    public function buildDoor(int $roomFrom, int $roomTo): void
    {
        $r1 = $this->maze->roomNo($roomFrom);
        $r2 = $this->maze->roomNo($roomTo);

        $door = new Door($r1, $r2);
    }

    public function getMaze(): Maze
    {
        return $this->maze;
    }
}