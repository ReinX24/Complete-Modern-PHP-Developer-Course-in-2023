<?php

namespace App;

class ToasterPremium extends Toaster
{
    protected int $slots;
    private int $duration;

    public function __construct(int $newDuration)
    {
        parent::__construct();
        $this->slots = 4;
        $this->duration = $newDuration;
    }

    public function toast()
    {
        parent::toast(); // calls the method in the parent class
        echo " for {$this->duration} minutes.";
    }
}
