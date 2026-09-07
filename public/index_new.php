<?php
#################
#
#   Osource.co.uk
#
#   File:       index.php
#   Path:       /
#   Author:     Anton Plisnier
#   Contact:    antonplisnier@protonmail.com
#   Description:    Start session, define constants, require bootstrap.php
#                   General Constants, do not change.
#
#
###################
#################### SESSION
session_start();

###################################### CONSTANTS


#CORE
define('CORE', '../core/');

define('BOOTSTRAP', CORE . 'bootstrap.php');
define('C_CONFIG', CORE . 'config.php');
define('C_CSS', CORE . 'styles.css');
define('HTMLHEADER', CORE . 'HTMLHeader.php');
define('HTMLFOOTER', CORE . 'HTMLFooter.php');
#VIEWS

define('VIEWS', '../views/');
define('VIEW_CONTENT', VIEWS . 'content/' );
define('VIEW_PROC', VIEWS . 'procedures/');

#CONFIG

define('CONFIG', '../config/');
define('DEBUGMODE', CONFIG . '_debug.php');

#CUSTOM
define('CUSTOM', '../custom/');
define('ROUTES', CUSTOM . '_routes.php');

################# BOOTSTRAP
require_once(BOOTSTRAP);
