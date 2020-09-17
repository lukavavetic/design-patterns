<?php

namespace Src\Structural\Composite\Example3;

class Client
{
    public function run()
    {
        $composite = new Composite();
        $composite->add(new LeafOne());
        $composite->add(new LeafTwo());

        $composite->operation();
    }
}