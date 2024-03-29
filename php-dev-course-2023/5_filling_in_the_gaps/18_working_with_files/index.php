<?php

if (file_exists("example.txt")) {
    // echo "File found!"
    echo filesize("example.txt");

    file_put_contents("example.txt", "Hello world");

    clearstatcache();

    echo file_get_contents("example.txt");
    // echo filesize("example.txt");
}

// mkdir("foo");
// rmdir("foo");

// $directory = scandir(__DIR__);
// print_r($directory);
