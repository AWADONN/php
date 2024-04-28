<?php

declare(strict_types=1);

namespace App;

require_once('./src/controller.php');
include_once('./src/utils/debug.php');
require_once('./config/config.php');

controller::iniConfiguration($configuration);

$request=[
	'get'=>$_GET,
	'post'=>$_POST,
];
$controller=new controller($request);
$controller->run();