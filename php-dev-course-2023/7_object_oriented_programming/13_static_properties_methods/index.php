<?php

// Autoloading php files
spl_autoload_register(function ($class) {
    // Classes are imported as App\Account, we must make this App/Account to 
    // import the php files.
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once($path);
});

// Imports the class from Account.php namespace (App\Account)
use App\{Account, SocialMedia, Utility};

$myAccount = new Account("John", 20);

$myAccount?->deposit(50)->deposit(30);

Utility::printArr([34, 43, 5]);

// Accessing static variables
// var_dump(Account::$count);
// var_dump($myAccount::$count);

// var_dump($myAccount::INTEREST_RATE); // reading constants from a class
// var_dump(Account::INTEREST_RATE);
