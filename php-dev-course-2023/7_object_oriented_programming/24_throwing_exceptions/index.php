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
};

try {
    Utility::printArr([]); // shows the docblock description from Utility.php
} catch (InvalidArgumentException | EmptyArrayException $e) {
    // This code is executed if an exception is caught in the try block
    echo "Custom exception: {$e->getMessage()} <br>";
} catch (Exception $e) {
    echo "Default exception: {$e->getMessage()} <br>";
} finally {
    echo "Finally block <br>";
}

echo "Finished running script";
