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
    FoodApp,
    RestaurantInterface
};

Utility::printArr([]); // shows the docblock description from Utility.php

$restaurant = new FoodApp(new class("popup restaurant") implements RestaurantInterface
{
    public function __construct(public string $name)
    {
    }

    public function prepareFood()
    {
        echo "{$this->name} Popup restaurant preparing food";
    }
});
