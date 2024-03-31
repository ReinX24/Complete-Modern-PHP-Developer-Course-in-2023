<?php

spl_autoload_register(function ($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once($path);
});

use App\{Account, SocialMedia, Utility, ToasterPremium};

$myToaster = new ToasterPremium(3);

$myToaster->toast();
