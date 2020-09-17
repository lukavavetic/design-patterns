<?php

namespace Src\Structural\Composite\Example1;

class Client
{
    public function run()
    {
        $head = new HeadDepartment();
        $head->add(new FinancialDepartment());
        $head->add(new SalesDepartment());

        $head->printDepartmentName();
    }
}