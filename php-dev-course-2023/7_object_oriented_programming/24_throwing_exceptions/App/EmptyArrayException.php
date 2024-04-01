<?php

namespace App;

use Exception;

class EmptyArrayException extends Exception
{
    // Changes the default error message of the exception
    protected $message = "Array is empty";
}
