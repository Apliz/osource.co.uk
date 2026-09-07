<?php
####################################################
#
#   osource.co.uk
#
#   File:           bootstrap.php
#   Path:           /core
#   Author:         Anton Plisnier
#   Contact:        antonplisnier@protonmail.com
#   Description:    Assemble page for render
#
#################################################### DEBUG

require_once(DEBUGMODE);
if(defined('DEBUG') && DEBUG) {
    error_reporting(E_ALL | E_STRICT);
    ini_set('display_errors', 'on');
}
############ GENERAL SCRIPT VARIABLES

$POST = filter_input_array(INPUT_POST);
$GET = filter_input_array(INPUT_GET);
$Uri = $_SERVER['REQUEST_URI'];
$VIEW = False;


#################################################### HEADER
header('Content-Type: text/html; charset=utf-8');

####### ROUTING
require_once(ROUTES);

if (array_key_exists($Uri, ROUTES)) {
    $VIEW = $Uri;
} elseif (array_key_exists('404', ROUTES)) {
    $VIEW = '404';
} else {
    die ('Failed to retreive view -> URL && 404. Error was ' . error_get_last()['message']);
}

######## VIEW PROC


