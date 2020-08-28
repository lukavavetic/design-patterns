<?php

namespace Src\Creational\Builder\Example3;

class Meal
{
    /** @var array */
    private $items;

    public function addItem(ItemInterface $item) : void
    {
        $this->items[] = $item;
    }

    public function getCost() : float
    {
        $cost = 0.0;

        foreach ($this->items as $item)
        {
            $cost += $item->price();
        }

        return floatval($cost);
    }

    public function showItems() : void
    {
        foreach ($this->items as $item)
        {
            print_r("Item: ".$item->name()."\n");
            print_r("Packing: ".$item->packing()->pack()."\n");
            print_r("Price: ".$item->price()."\n");
        }
    }
}