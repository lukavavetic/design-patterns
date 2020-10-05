<?php

namespace Src\Creational\FactoryMethod\GangOfFour;

class MazeGame
{
    public function createMaze() : Maze
    {
        $aMaze = $this->makeMaze();

        $r1 = $this->makeRoom(1);
        $r2 = $this->makeRoom(2);

        $theDoor = $this->makeDoor($r1, $r2);

        $aMaze->addRoom($r1);
        $aMaze->addRoom($r2);

        $r1->setSide(DirectionEnum::NORTH, $this->makeWall());
        $r1->setSide(DirectionEnum::EAST, $theDoor);
        $r1->setSide(DirectionEnum::SOUTH, $this->makeWall());
        $r1->setSide(DirectionEnum::WEST, $this->makeWall());

        $r1->setSide(DirectionEnum::NORTH, $this->makeWall());
        $r1->setSide(DirectionEnum::EAST, $this->makeWall());
        $r1->setSide(DirectionEnum::SOUTH, $this->makeWall());
        $r1->setSide(DirectionEnum::WEST, $theDoor);

        return $aMaze;
    }

    protected function makeMaze() : Maze
    {
        return new Maze();
    }

    protected function makeRoom(int $n) : Room
    {
        return new Room($n);
    }

    protected function makeWall() : Wall
    {
        return new Wall();
    }

    protected function makeDoor(Room $r1, Room $r2) : Door
    {
        return new Door($r1, $r2);
    }
}