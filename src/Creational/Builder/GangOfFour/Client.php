<?php

namespace Src\Creational\Builder\GangOfFour;

class Client
{
    public static function run()
    {
        $builder = new StandardMazeBuilder();

        $game = MazeGame::createMaze($builder);

        $maze = $game->getMaze();

        $room = $maze->roomNo(1);

        $north = $room->getSide(DirectionEnum::NORTH);

        print($north->say());
    }
}