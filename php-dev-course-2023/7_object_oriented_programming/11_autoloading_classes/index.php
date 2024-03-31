<?php

// require_once("App/Account.php");
// require_once("App/SocialMedia.php");

// Autoloading php files
spl_autoload_register(function ($class) {
    // Classes are imported as App\Account, we must make this App/Account to 
    // import the php files.
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once($path);
});

// Imports the class from Account.php namespace (App\Account)
use App\{Account, SocialMedia};

$myAccount = new Account("John", 20);

$myAccount?->deposit(50)->deposit(30);

var_dump($myAccount);
