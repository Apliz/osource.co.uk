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

return array(
    'default' => array(
        'view' => VIEW_CONTENT . 'v_profile.php',
        'proc' => VIEW_PROC . 'p_profile.php'
    ),
    '404'   => array(
        'view' => VIEW_CONTENT . 'v_404.php',
        'proc' => VIEW_PROC . 'p_404.php'
    ),
    'profile' => array( 
        'view' => VIEW_CONTENT . 'v_profile.php',
        'proc' => VIEW_PROC . 'p_profile.php'
    )
);
