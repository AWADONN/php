<?php
declare(strict_types=1);

namespace App;

require_once('./src/View.php');
include_once('./src/utils/debug.php');

const DEFAULT_ACTION ='list';


$action=$_GET['action'] ?? DEFAULT_ACTION;

$viewParams = [];

if ($action === 'create'){
	$page = 'create;'
	$viewParams ['resultCreate'] ='Udało się dodac notatkę!';
} else {
	$page = 'list;'
	$viewParams ['resultList'] ='Wyświetlamy nową notatkę!';
}

$view = new view ();
$view ->render($page,$viewParams);
