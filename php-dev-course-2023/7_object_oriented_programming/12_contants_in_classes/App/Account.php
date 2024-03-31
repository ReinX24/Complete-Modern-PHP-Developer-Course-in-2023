<?php

declare(strict_types=1);

namespace App;

class Account
{
    public const INTEREST_RATE = 2;

    // The SocialMedia class is in the same namespace which means we can use it
    // without importing.
    public SocialMedia $socialMedia;

    public function __construct(public string $name, public float $balance)
    {
        $this->socialMedia = new SocialMedia();
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this; // this is added so that we could do method chaining
    }
}
