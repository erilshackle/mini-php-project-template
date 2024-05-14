<?php

spl_autoload_register(function ($filename) {

    if (file_exists(__DIR__ . '\/classes/' . $filename . ".php")) {
        require __DIR__ . "\/classes/" . $filename . ".php";
    } elseif (file_exists(__DIR__ . '\/models/' . $filename . ".php")) {
        require __DIR__ . "\/models/" . $filename . ".php";
    }

});