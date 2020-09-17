<?php

namespace Src\Structural\Bridge\Example2;

class CivilianTime extends Time
{
    public function __construct(int $hr, int $min, string $whichM)
    {
        parent::__construct($hr, $min);
        $this->imp = new CivilianTimeImp($hr, $min, $whichM);
    }

    public function tell() : void
    {
        $this->imp->tell();
    }
}