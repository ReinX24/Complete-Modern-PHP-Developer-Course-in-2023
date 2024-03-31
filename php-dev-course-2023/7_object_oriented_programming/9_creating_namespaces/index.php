<?php

require_once("Account.php");

use App\Account; // imports the class from Account.php namespace (App\Account)

$myAccount = new Account("John", 20);
// $myAccount = null;

$myAccount?->deposit(50)->deposit(30);

var_dump($myAccount);
