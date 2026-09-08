<?php

#################################
#
#   osource.co.uk
#   File            _routes.php
#   Path            /config
#   Author:         Anton Plisnier
#   Contact:        antonplisnier@protonmail.com
#   Description:    Array of available views.
#
#################################

$content_fpath  = __DIR__ . '../../views/content/';
$proc_fpath     = __DIR__ . '../../views/procedure/';

return array(
    'default' => array(
        'view_file' => $content_fpath . 'v_profile.php',
        'proc_file' => $proc_fpath . 'p_profile.php'
    ),
    '404'   => array(
        'view_file' => $content_fpath . 'v_404.php',
        'proc_file' => $proc_fpath. 'p_404.php'
    ),
    'profile' => array(
        'view_file' => $content_fpath . 'v_profile.php',
        'proc_file' => $proc_fpath . 'p_profile.php'
    )
);
