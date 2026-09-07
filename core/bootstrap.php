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
######### AUTOLOAD ###########
require __DIR__ . '/../vendor/autoload.php';

$debug = new Mod\Debug(); # Defaults to FALSE
$debug->setDebugMode(true);
############ GENERAL SCRIPT VARIABLES

#################################################### HEADER
header('Content-Type: text/html; charset=utf-8');

####### ROUTING

$router = new Mod\Router();


######## PROCEDURES

$proc = new Mod\Procedure();

$app = new Mod\Application();

return $app;
