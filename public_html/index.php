<?php

include_once 'bootstrap.php';


$controller = new App\Controllers\IndexController($_REQUEST);
$controller->loadView();
