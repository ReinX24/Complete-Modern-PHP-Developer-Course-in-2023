<?php

namespace App;

class Toaster
{
    protected int $slots;

    public function __construct()
    {
        $this->slots = 2;
    }

    public function toast()
    {
        echo "{$this->slots} Toasting bread";
    }
}
