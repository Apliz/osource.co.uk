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
$uri = $_SERVER['REQUEST_URI'];
#################################################### HEADER
header('Content-Type: text/html; charset=utf-8');

####### ROUTING

$router = new Mod\Router();

######### GET VIEW AND PROCEDURE FILES
$route_data = $router->getRouteData($uri);
$view = $route_data['view'];
$proc = $route_data['proc'];

###### APPLICATION
$app = new Mod\Application();

return $app;
