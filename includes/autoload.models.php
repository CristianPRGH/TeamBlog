<?php

spl_autoload_register(function($classname){
    $extension = ".php";
    $path = "../model/";
    $fullpath = $path.$classname.$extension;

    try {
        if (file_exists($fullpath))
        {
            require_once $fullpath;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
});