<?php

namespace App;

class FoodApp
{
    // Constructor accepts objects that implement the RestaurantInterface.
    public function __construct(RestaurantInterface $restaurant)
    {
        $restaurant->prepareFood();
    }
}
