<?php

namespace Src\Structural\Adapter\Example1;

class EnemyRobotAdapter implements EnemyAttacker
{
    private EnemyRobot $enemyRobot;

    public function __construct(EnemyRobot $enemyRobot)
    {
        $this->enemyRobot = $enemyRobot;
    }

    public function fireWeapon() : void
    {
        $this->enemyRobot->smashWithHands();
    }

    public function driveForward() : void
    {
        $this->enemyRobot->walkForward();
    }

    public function assignDriver(string $driverName) : void
    {
        $this->enemyRobot->reactToHuman($driverName);
    }
}