<?php

require_once("Account.php");

// $myAccount = new Account("John", 20);
$myAccount = null;

// The ? checks if the value on the left is null and terminates operations on
// the variable
$myAccount?->deposit(50)->deposit(30);

var_dump($myAccount);
