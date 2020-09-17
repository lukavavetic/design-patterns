<?php

namespace Src\Structural\Bridge\Example2;

class CivilianTimeImp extends TimeImp
{
    private string $whichM;

    public function __construct(int $hr, int $min, string $whichM)
    {
        parent::__construct($hr, $min);

        $this->whichM = $whichM;
    }

    public function tell() : void
    {
        print("Time is: ".$this->hr." ".$this->min. " ".$this->whichM);
    }
}