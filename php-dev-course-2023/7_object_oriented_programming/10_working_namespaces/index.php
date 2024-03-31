<?php

require_once("App/Account.php");
require_once("App/SocialMedia.php");

// Imports the class from Account.php namespace (App\Account)
use App\{Account, SocialMedia};

$myAccount = new Account("John", 20);

$myAccount?->deposit(50)->deposit(30);

var_dump($myAccount);
