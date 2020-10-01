<?php

namespace Src\Creational\AbstractFactory\GangOfFour;

class RoomWithABomb extends Room
{
    public function __construct(int $roomNo)
    {
        parent::__construct($roomNo);
    }

    public function say() : void
    {
        print("I am RoomWithABomb");
    }
}