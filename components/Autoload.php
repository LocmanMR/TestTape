<?php

spl_autoload_register(function ($class){
    $array_paths = [
        '/models/',
        '/components/',
        '/controllers/',
        '/dto/',
    ];

    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class . '.php';
        if (is_file($path)) {
            include_once($path);
        }
    }
});

