<?php

namespace Src\Creational\FactoryMethod\GangOfFour;

class Client
{
    public function run() : void
    {
//        $mazeGame = new MazeGame();
//
//        $maze = $mazeGame->createMaze();
//        $room = $maze->roomNo(1);
//        print($room->say()); // "I am room"

        $mazeGame = new BombedMazeGame();

        $maze = $mazeGame->createMaze();
        $room = $maze->roomNo(1);
        print($room->say()); // "I am RoomWithABomb"

    }
}