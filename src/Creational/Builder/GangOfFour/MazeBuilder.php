<?php

namespace Src\Creational\Builder\GangOfFour;

abstract class MazeBuilder
{
    abstract public function buildMaze() : void;
    abstract public function buildRoom(int $room) : void;
    abstract public function buildDoor(int $roomFrom, int $roomTo) : void;
    abstract public function getMaze() : Maze;
}