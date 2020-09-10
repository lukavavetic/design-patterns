<?php

namespace Src\Structural\Adapter\Example1;

interface EnemyAttacker
{
    public function fireWeapon() : void;
    public function driveForward() : void;
    public function assignDriver(string $driverName) : void;
}