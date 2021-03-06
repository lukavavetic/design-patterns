<?php

namespace Src\Creational\Builder\Example3;

class MealBuilder
{
    public function prepareVegMeal() : Meal
    {
        $meal = new Meal();
        $meal->addItem(new VegBurger());
        $meal->addItem(new Coke());

        return $meal;
    }

    public function prepareNonVegMeal() : Meal
    {
        $meal = new Meal();
        $meal->addItem(new ChickenBurger());
        $meal->addItem(new Pepsi());

        return $meal;
    }
}