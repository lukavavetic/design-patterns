<?php

namespace Src\Structural\Adapter\Example2;

class BirdAdapter implements ToyDuckInterface
{
    private BirdInterface $bird;

    public function __construct(BirdInterface $bird)
    {
        $this->bird = $bird;
    }


    public function squeak(): void
    {
        $this->bird->makeSound();
    }
}