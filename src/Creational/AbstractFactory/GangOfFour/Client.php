<?php

namespace Src\Creational\AbstractFactory\GangOfFour;

class Client
{
    public static function run()
    {
        $mazeFactory = new MazeFactory();
        $bombedMazeFactory = new BombedMazeFactory();
        $enchantedMazeFactory = new EnchantedMazeFactory();


        $mazeGame = MazeGame::createMaze($mazeFactory);
//        $mazeGame = MazeGame::createMaze($bombedMazeFactory);
//        $mazeGame = MazeGame::createMaze($enchantedMazeFactory);

        $room = $mazeGame->roomNo(0);

        $northSide = $room->getSide(DirectionEnum::EAST);

        print($northSide->say());
    }
}