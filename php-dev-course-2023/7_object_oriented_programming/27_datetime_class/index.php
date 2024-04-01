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
    EmptyArrayException,
    RestaurantOne,
    RestaurantTwo,
    FoodApp,
    RestaurantInterface,
    CurrentWeek
};

$currentWeek = new CurrentWeek();

// Accepts objects where the iterator interface is implemented
function foo(iterable $iterable)
{
    foreach ($iterable as $key => $value) {
        // The key is daysFrom and value is current day information
        var_dump($key, $value);
        echo "<br>";
    }
}

foo($currentWeek);



// $timezone = new DateTimeZone("Asia/Manila");
// $date = new DateTime("12/22/78", $timezone);
// $date->setTimezone(new DateTimeZone("Europe/Paris"))
//     ->setDate(2023, 6, 15)
//     ->setTime(9, 30);

// European time, dd.mm.yy
// $date = new DateTime("04.10.2022", $timezone);

// Utility::printObj($date);
