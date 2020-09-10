<?php

namespace Src\Structural\Adapter\Example1;

class EnemyRobot 
{
    public function smashWithHands() : void
    {
        print_r("Enemy robot does 10 damage with hands");
    }

    public function walkForward() : void
    {
        print_r("Enemy robot walks forward 15 spaces");
    }

    public function reactToHuman(string $driverName) : void
    {
        print_r("Enemy robot tramps on ". $driverName);
    }
}