<?php

include_once 'bootstrap.php';

use App\Controller\MainController;

$controller = new MainController();
$controller->index();
