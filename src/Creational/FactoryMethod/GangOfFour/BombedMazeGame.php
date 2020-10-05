<?php

namespace Src\Creational\FactoryMethod\GangOfFour;

class BombedMazeGame extends MazeGame
{
    protected function makeRoom(int $n) : RoomWithABomb
    {
        return new RoomWithABomb($n);
    }

    protected function makeWall() : BombedWall
    {
        return new BombedWall();
    }
}