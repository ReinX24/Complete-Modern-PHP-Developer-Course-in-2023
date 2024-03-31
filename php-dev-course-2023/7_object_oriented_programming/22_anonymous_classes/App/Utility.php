<?php

namespace App;

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
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}
