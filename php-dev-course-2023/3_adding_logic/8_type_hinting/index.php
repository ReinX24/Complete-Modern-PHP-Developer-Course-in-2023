<?php

// The ?string means that it can return a null or a string
// int|float means that we can accept integers and floats
function getStatus(int|float $paymentStatus, bool $showMessage = true): ?string
{
    $message = match ($paymentStatus) {
        1 => "Success",
        2 => "Denied",
        default => "Unknown"
    };

    if ($showMessage) {
        var_dump($message);
        return null;
    }

    return $message;
}

$statusMessage = getStatus(1);
var_dump($statusMessage);
