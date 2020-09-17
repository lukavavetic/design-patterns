<?php

namespace Src\Structural\Bridge\Example2;

class ZuluTime extends Time
{
    public function __construct(int $hr, int $min, string $zone)
    {
        parent::__construct($hr, $min);
        $this->imp = new ZuluTimeImp($hr, $min, $zone);
    }

    public function tell() : void
    {
        $this->imp->tell();
    }
}