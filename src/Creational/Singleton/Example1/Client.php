<?php

namespace Src\Creational\Singleton\Example1;

class Client
{
    public function run()
    {
        $bookOne = BookSingleton::getInstance();

        $bookTwo = BookSingleton::getInstance();

        if ($bookOne === $bookTwo) {
            print("Same");
        }
    }
}