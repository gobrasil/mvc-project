<?php

/**
 * Configuration file
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
date_default_timezone_set('America/Sao_Paulo');
define('DS', \DIRECTORY_SEPARATOR);
include_once '..'.DS.'vendor'.DS.'autoload.php';