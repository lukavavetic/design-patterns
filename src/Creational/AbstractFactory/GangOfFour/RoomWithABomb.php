<?php

namespace Src\Creational\AbstractFactory\GangOfFour;

class RoomWithABomb extends Room
{
    public function __construct(int $roomNo)
    {
        parent::__construct($roomNo);
    }
}