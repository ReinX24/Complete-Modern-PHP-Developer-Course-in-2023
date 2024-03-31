<?php

declare(strict_types=1);

namespace App;

class Account
{
    public const INTEREST_RATE = 2;
    public static int $count = 0;

    // The SocialMedia class is in the same namespace which means we can use it
    // without importing.
    public SocialMedia $socialMedia;

    public function __construct(public string $name, public float $balance)
    {
        $this->socialMedia = new SocialMedia();

        self::$count++; // modifying static properties using self keyword
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this; // this is added so that we could do method chaining
    }
}
