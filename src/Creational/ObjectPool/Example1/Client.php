<?php

namespace Src\Creational\ObjectPool\Example1;

class Client
{
    public function run()
    {
        $reusableObject = new ReusableObject();

        $objectPool = ObjectPool::getInstance();
        $objectPool->add($reusableObject, 1);

        $reusableObject1 = $objectPool->get(1);

        $object = new \ReflectionObject($reusableObject1);
        $interfaceNamespace = $object->getInterfaceNames();

        $explode = explode( '\\', $interfaceNamespace[0]);

        $type = $explode[4];

        if ($type === "ReusableObjectInterface") {
            print("assert true");
        }
    }
}