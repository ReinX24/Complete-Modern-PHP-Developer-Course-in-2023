<?php

$myCup = "empty";
$myFriendsCup = "empty";

// The ampersand (&) means that the original value of the variable is passed in. 
function fillCup(&$cupParam)
{
    $cupParam = "filled";
}

fillCup($myCup);
fillCup($myFriendsCup);

echo $myCup . "<br>";
echo $myFriendsCup . "<br>";
