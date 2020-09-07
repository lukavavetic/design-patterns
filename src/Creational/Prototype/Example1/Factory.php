<?php

namespace Src\Creational\Prototype\Example1;

class Factory
{
    private static array $prototypes;

    public static function addPrototypes(string $key, PersonInterface $person) : void
    {
        self::$prototypes = [$key => $person];
    }

    public static function getPrototype(string $type) : PersonInterface
    {
        try {
            return clone self::$prototypes[$type];
        } catch (\Exception $e) {
            throw new \Exception("Not found", 404);
        }
    }

}