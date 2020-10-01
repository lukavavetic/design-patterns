<?php

namespace Src\Creational\Builder\GangOfFour;

class MazeGame
{
    public static function createMaze(MazeBuilder $builder) : MazeBuilder
    {
        $builder->buildMaze();
        $builder->buildRoom(1);
        $builder->buildRoom(2);
        $builder->buildDoor(1, 2);

        return $builder;
    }
}