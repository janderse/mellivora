<?php

session_start();

require('config/config.inc.php');
require(CONFIG_PATH_INCLUDE . 'session.inc.php');
require(CONFIG_PATH_INCLUDE . 'general.inc.php');
require(CONFIG_PATH_INCLUDE . 'graphics.inc.php');
require(CONFIG_PATH_INCLUDE . 'db.inc.php');
require(CONFIG_PATH_THIRDPARTY . 'Cache/Lite/Output.php');