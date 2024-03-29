<?php

declare(strict_types=1);

class Account
{
    // Shorthand way of assigning values to variables using a constructor.
    public function __construct(public string $name, public float $balance)
    {
    }
}
