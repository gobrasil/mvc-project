<?php

include_once '../bootstrap.php';

use App\Controllers\IndexController;

$controller = new IndexController($_REQUEST);
$controller->loadView();
