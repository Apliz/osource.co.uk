<?php

namespace Mod;

class Debug
{
    protected bool $mode;

    public function __construct(bool $mode = false)
    {
        $this->mode = $mode;
    }

    public function setDebugMode(bool $mode): void
    {
        if ($mode) {
            error_reporting(E_ALL | E_STRICT);
            ini_set('display_errors', 'on');
        }
    }
};
