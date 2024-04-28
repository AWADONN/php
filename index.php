<?php

declare(strict_types=1);

namespace App;

require_once('./src/controller.php');
include_once('./src/utils/debug.php');
require_once('./config/config.php');
require_once('./Exception/AppException.php');
require_once('./Exception/StorageException.php');
require_once('./Exception/ConfigurationException.php');

use App\Exception\AppException;
use App\Exception\StorageException;
use App\Exception\ConfigurationException;
use Throwable;



try{
	controller::iniConfiguration($configuration);
	$request=[
		'get'=>$_GET,
		'post'=>$_POST,
	];
	$controller=new controller($request);
	$controller->run();
} catch (AppException $e) {
	echo "<h1>Wystąpił bląd w aplikacji</h1>";
	echo "<h2>{$e->getMessage()}</h2>";
} catch (Throwable $e) {
	echo "<h1>Wystąpił błąd w aplikacji - skontaktuj się z administratorem.</h1>";
}