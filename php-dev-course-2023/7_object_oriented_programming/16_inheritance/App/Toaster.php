<?php

namespace App;

class Toaster
{
    protected int $slots = 2;

    public function toast()
    {
        echo "{$this->slots} Toasting bread...";
    }
}
