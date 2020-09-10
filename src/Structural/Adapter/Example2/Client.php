<?php

namespace Src\Structural\Adapter\Example2;

class Client
{
    public function run()
    {
        $plasticToyDuck = new PlasticToyDuck();

        $birdAdapter = new BirdAdapter(new Sparrow());

        $plasticToyDuck->squeak();

        $birdAdapter->squeak();
    }
}