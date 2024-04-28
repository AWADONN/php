<?php
declare(strict_types=1);

namespace App;

require_once('./src/View.php');
include_once('./src/utils/debug.php');

const DEFAULT_ACTION ='list';


$action=$_GET['action'] ?? DEFAULT_ACTION;
	
$viewParams = [];

// if ($action === 'create'){
// 	$page = 'create';
// 	$created = false;
// 	if (!empty($_POST)) {
// 		$viewParams=[
// 			'title'=>$_POST['title'],
// 			'description'=>$_POST['description'],
// 		];
// 		$created = true;
// 	}
// 	$viewParams['created'] = $created;
// } else {
// 	$page = 'list';
// 	$viewParams ['resultList'] ='Wyświetlamy nową notatkę!';
// }
switch($action){
	case'create':
		$page = 'create';
	 	$created = false;
		if (!empty($_POST)) {
			$viewParams=[
				'title'=>$_POST['title'],
		 		'description'=>$_POST['description'],
			];
			$created = true;
		}
		$viewParams['created'] = $created;
		break;
	default:
		$page = 'list';
		$viewParams ['resultList'] ='Wyświetlamy liste notatek';
}
$view = new view ();
$view ->render($page,$viewParams);
