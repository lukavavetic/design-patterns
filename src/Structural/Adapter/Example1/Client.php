<?php

namespace Src\Structural\Adapter\Example1;

class Client
{
    public function run()
    {
        $enemyTank = new EnemyTank();

        $enemyRobotAdapter = new EnemyRobotAdapter(new EnemyRobot());

        $enemyTank->assignDriver("Luka");
        $enemyTank->driveForward();
        $enemyTank->fireWeapon();

        $enemyRobotAdapter->assignDriver("Matija");
        $enemyRobotAdapter->driveForward();
        $enemyRobotAdapter->fireWeapon();
    }
}