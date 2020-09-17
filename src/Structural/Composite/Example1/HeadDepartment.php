<?php

namespace Src\Structural\Composite\Example1;

class HeadDepartment implements DepartmentInterface
{
    private array $departments;

    public function add(DepartmentInterface $department) : void
    {
        $this->departments[] = $department;
    }

    public function printDepartmentName(): void
    {
        foreach ($this->departments as $department) {
            $department->printDepartmentName();
        }
    }
}