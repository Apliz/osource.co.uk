<?php

declare(strict_types=1);

namespace Mod;

class Router
{
    protected $filepaths;

    public function __construct()
    {
        $this->filepaths = require(__DIR__ .'../../config/filepaths.php');
    }

    public function getRouteData(string $route): array # Called by core/bootstrap.php
    {
        $available = require($this->filepaths['route_files']);

        # Guard clause
        if (!array_key_exists($route, $available)) {
            die('route name not in view array');
        }
        foreach ($available[$route] as $f_descriptor => $file) {
            if (!file_exists($file)) {
                die('filetype:'. $f_descriptor  . ' -> ' . $available[$route] . '.php was not found.');
            }
        }

        # Stage correct view file and procedure file for return
        $view_data = $available[$route]['view_file'];
        $proc_data = $available[$route]['proc_file'];

        return ['view_file' => $view_data, 'proc_file' => $proc_data];

    }

}
