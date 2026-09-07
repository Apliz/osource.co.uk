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
declare(strict_types=1);
session_start();

###################################### CONSTANTS

#ROOT
const ROOT      =  __DIR__ . '/..';

require_once(dirname(__DIR__) . '../core/bootstrap.php');

$app->run();
