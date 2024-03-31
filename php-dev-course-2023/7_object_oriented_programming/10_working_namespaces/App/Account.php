<?php

declare(strict_types=1);

namespace App;

// new DateTime(); // does not work because DateTime is not in App namespace.
// new \DateTime(); // finds the class in the global namespace.

// Another way of using the DateTime class.
use DateTime as DT;

new DT();
// new DateTime();

class Account
{

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
