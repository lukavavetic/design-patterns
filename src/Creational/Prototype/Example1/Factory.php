<?php

namespace Src\Creational\Prototype\Example1;

class Factory
{
    private static array $prototypes;

    public static function __constructStatic()
    {
        self::$prototypes = [
            "tom" => new Tom(),
            "dick" => new Dick(),
            "harry" => new Harry()
        ];
    }

    public static function getPrototype(string $type) : PersonInterface
    {
        try {
            return self::$prototypes[$type];
        } catch (\Exception $e) {
            throw new \Exception("Not found", 404);
        }
    }

}