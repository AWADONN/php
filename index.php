<?php

declare(strict_types=1);

namespace App;

require_once('./src/controller.php');
include_once('./src/utils/debug.php');

$controller=new controller($_GET,$_POST);
$controller->run();