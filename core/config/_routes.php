<?php

#################################
#
#   osource.co.uk
#   File    _routes.php
#   Path    /custom
#   Author: Anton Plisnier
#   Contact:    antonplisnier@protonmail.com
#   Description:    view router. Array of available views
#
#
#
#################################
$viewContent = require(__DIR__ . '../../views/content/');
$viewProcedure = require(__DIR__ . '../../views/procedure/');

return array(
    'default' => array(
        'view' => $viewContent . 'v_profile.php',
        'proc' => $viewProcedure . 'p_profile.php'
    ),
    '404'   => array(
        'view' => $viewContent . 'v_404.php',
        'proc' => $viewProcedure . 'p_404.php'
    ),
    'profile' => array(
        'view' => VIEW_CONTENT . 'v_profile.php',
        'proc' => $viewProcedure . 'p_profile.php'
    )
);
