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

    public function getRouteData(string $route): array
    {
        $available = require($this->filepaths['route_files']);

        # Guard clause
        if (!array_key_exists($route, $available)) {
            die('route name not in view array');
        }
        foreach ($available[$route] as $name => $path) {
            if (!file_exists($path)) {
                die($name . 'file:'.  $available[$route] . '.php was NOT FOUND.');
            }
        }
        $view = $available[$route]['view'];
        $proc = $available[$route]['proc'];

        return ['view' => $view, 'proc' => $proc];

    }

}
