<?php

namespace App;

class Toaster extends AbstractProduct
{
    protected int $slots;

    public function __construct()
    {
        $this->slots = 2;
        $this->turnOn();
    }

    public function toast()
    {
        echo "{$this->slots} Toasting bread";
    }

    public function setup()
    {
    }
}
