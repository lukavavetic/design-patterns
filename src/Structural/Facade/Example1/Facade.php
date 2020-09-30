<?php

namespace Src\Structural\Facade\Example1;

class Facade
{
    private Subsystem1 $subsystem1;
    private Subsystem2 $subsystem2;

    public function __construct(Subsystem1 $subsystem1, Subsystem2 $subsystem2)
    {
        $this->subsystem1 = $subsystem1;
        $this->subsystem2 = $subsystem2;
    }

    public function operation() : void
    {
        $this->subsystem1->operation1();
        $this->subsystem1->operation2();
        $this->subsystem2->operation1();
        $this->subsystem2->operation2();
    }
}