<?php

namespace Src\Structural\Composite\Example1;

class SalesDepartment implements DepartmentInterface
{
    public function printDepartmentName() : void
    {
        print("Sales Department");
    }
}