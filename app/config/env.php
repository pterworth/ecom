<?php

# BASE PATH: ../PROJECTNAME/
define('BASE_PATH', realpath(__DIR__ . '/../../'));

# COMPOSER PACKAGE AUTOLOADER
require_once __DIR__ . '/../../vendor/autoload.php';

# LOAD THE ENV FILE THROUGH THE Dotenv PACKAGE FROM COMPOSER
$dotEnv = new \Dotenv\Dotenv(BASE_PATH);
$dotEnv->load();