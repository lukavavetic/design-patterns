<?php

namespace Src\Structural\Composite\Example1;

class FinancialDepartment implements DepartmentInterface
{
    public function printDepartmentName() : void
    {
        print("Financial Department");
    }
}