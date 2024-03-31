<?php

spl_autoload_register(function ($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once($path);
});

use App\{
    Account,
    SocialMedia,
    Utility,
    ToasterPremium,
    AbstractProduct,
    RestaurantOne,
    RestaurantTwo,
    FoodApp
};

$restaurant = new FoodApp(new RestaurantOne());
