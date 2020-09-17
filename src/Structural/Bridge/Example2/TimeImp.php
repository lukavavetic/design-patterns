<?php

namespace Src\Structural\Bridge\Example2;

class TimeImp
{
    protected int $hr;
    protected int $min;

    public function __construct(int $hr, int $min)
    {
        $this->hr   = $hr;
        $this->min = $min;
    }

    public function tell() : void
    {
        print("Time is: ".$this->hr." ".$this->min);
    }
}