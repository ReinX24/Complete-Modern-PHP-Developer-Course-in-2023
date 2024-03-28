<?php

declare(strict_types=1);

function twoFer(string $name = "you"): string
{
    return "One for {$name}, one for me.";
}

echo twoFer("Alice") . "<br>";
echo twoFer("Bob") . "<br>";
echo twoFer() . "<br>";
echo twoFer("Zaphod") . "<br>";
