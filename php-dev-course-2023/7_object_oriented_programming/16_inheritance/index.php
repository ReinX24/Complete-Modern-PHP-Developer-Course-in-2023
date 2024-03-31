<?php

// Autoloading php files
spl_autoload_register(function ($class) {
    // Classes are imported as App\Account, we must make this App/Account to 
    // import the php files.
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once($path);
});

use App\{Account, SocialMedia, Utility, ToasterPremium};

$myToaster = new ToasterPremium();
$myToaster->toast();
