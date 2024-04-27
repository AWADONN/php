<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<header>
		<h1>moje notatki</h1>
	</header>
	<main>
		<nav>
			<ul>
				<li><a href="/">lista notatek </a></li>
				<li><a href="/?action=create">Nowa notatka </a></li>
			</ul>
		</nav>
		<article>
			<?php
			if ($page ==='create'){
				include_once('./templates/pages/create.php');
			} else{
				include_once('./templates/pages/list.php');
			}
			?>
		</article>
	</main>
	<footer> Stopka</footer>
</body>
</html>