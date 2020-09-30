<?php

namespace Src\Creational\AbstractFactory\GangOfFour;

class MazeGame
{
    public static function createMaze(MazeFactory $factory) : Maze
    {
        $maze = $factory->makeMaze();
        $r1 = $factory->makeRoom(1);
        $r2 = $factory->makeRoom(2);
        $door = $factory->makeDoor($r1, $r2);

        $maze->addRoom($r1);
        $maze->addRoom($r2);

        $r1->setSide(DirectionEnum::NORTH, $factory->makeWall());
        $r1->setSide(DirectionEnum::EAST, $door);
        $r1->setSide(DirectionEnum::SOUTH, $factory->makeWall());
        $r1->setSide(DirectionEnum::WEST, $factory->makeWall());

        $r2->setSide(DirectionEnum::NORTH, $factory->makeWall());
        $r2->setSide(DirectionEnum::EAST, $factory->makeWall());
        $r2->setSide(DirectionEnum::SOUTH, $factory->makeWall());
        $r2->setSide(DirectionEnum::WEST, $door);

        return $maze;
    }
}