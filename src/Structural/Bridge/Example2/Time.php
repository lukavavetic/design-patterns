<?php

namespace Src\Structural\Bridge\Example2;

class Time
{
    protected TimeImp $imp;

    public function __construct(int $hr, int $min)
    {
        $this->imp = new TimeImp($hr, $min);
    }

    public function tell() : void
    {
        $this->imp->tell();
    }
}