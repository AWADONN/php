<?php
declare(strict_types=1);

namespace App;
require_once('./src/view.php');
include_once('./src/utils/debug.php');

//$_GET
//$_POST

$action=$_GET['action'] ?? null;


$view = new view ();
$view -> render($action);