<?php

namespace Src\Structural\Bridge\Example2;

class ZuluTimeImp extends TimeImp
{
    private string $zone;

    public function __construct(int $hr, int $min, string $zone)
    {
        parent::__construct($hr, $min);

        $this->zone = $zone;
    }

    public function tell() : void
    {
        print("Time is: ".$this->hr." ".$this->min. " ".$this->zone);
    }
}