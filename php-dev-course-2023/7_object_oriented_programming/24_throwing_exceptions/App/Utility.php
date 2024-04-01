<?php

namespace App;

use Exception;
use InvalidArgumentException;

class Utility
{
    // This is a docblock
    /** 
     * Neatly prints an array (summary)
     * 
     * Outputs an array surrounded by pre tags for formatting (description)
     * 
     * @param array $array The array to output (parameters and description)
     */
    public static function printArr(array $array)
    {
        if (count($array) === 0) {
            // throw new Exception("Array is empty");
            // throw new InvalidArgumentException("Array is empty");
            // No need to import the exception because they are in the same 
            // namespace.
            throw new EmptyArrayException();
        }

        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}
