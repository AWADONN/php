<?php
declare(strict_types=1);

namespace App;

include_once('./src/utils/debug.php');

//$_GET
//$_POST

$action=$_GET['action'] ?? null;


?>
<!DOCTYPE html>
<html lang="em">
	<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	</head>
	<body>
		<header>
			<h1> moje notatki</h1>
		</header>
		<main>
			<nav>
				<ul>
					<li>
						<a href="/">Lista notatek</a>
					</li>
					<li>
						<a href="/?action=create">nowa notatka</a>
					</li>
				</ul>
			</nav>
			<article>
				<?php if ($action == 'create') : ?>
					<h3>nowa notatka</h3>
					<?php echo htmlentities($action) ?>
				<?php else:?>
					<h3> lista notatek</h3>
					<?php echo htmlentities($action ?? '') ?>
				<?php endif; ?>
			</article>
		</main>
		<footer>Stopka</footer>
	</body>
</html>