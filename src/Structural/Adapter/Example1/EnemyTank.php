<?php

namespace Src\Structural\Adapter\Example1;

class EnemyTank implements EnemyAttacker
{
    public function fireWeapon() : void
    {
        print_r("Enemy tank does 10 damage");
    }

    public function driveForward() : void
    {
        print_r("Enemy tank does 15 damage");
    }

    public function assignDriver(string $driverName) : void
    {
        print_r($driverName." is driving the tank");
    }
}