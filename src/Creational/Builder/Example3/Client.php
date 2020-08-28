<?php

namespace Src\Creational\Builder\Example3;

class Client
{
    public function run()
    {
        $mealBuilder = new MealBuilder();

        $vegMeal = $mealBuilder->prepareVegMeal();
        print_r("Veg meal: \n");
        $vegMeal->showItems();
        print_r("Total cost: ".$vegMeal->getCost()."\n");

        $nonVegMeal = $mealBuilder->prepareNonVegMeal();
        print_r("Non veg meal: \n");
        $nonVegMeal->showItems();
        print_r("Total cost: ".$nonVegMeal->getCost());
    }
}