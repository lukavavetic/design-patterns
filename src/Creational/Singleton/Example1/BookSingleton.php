<?php

namespace Src\Creational\Singleton\Example1;

class BookSingleton
{
    private static $instance;

    private function __construct()
    {
    }

    static function getInstance() : BookSingleton
    {
        if (self::$instance === null) {
            self::$instance = new BookSingleton();
        }

        return self::$instance;
    }
}