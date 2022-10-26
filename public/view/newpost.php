<!doctype html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Добавления новостей</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
	<header class="header">
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-blue" role="navigation">
			<a class="navbar-brand" href="#" role="banner">Учебный проект</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Переключить навигацию">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarsDefault">
				<?php include_once __DIR__ . './menu/menu.php' ?>

			</div>
		</nav>
	</header>
	<main role="main">
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Добавить новость</h1>
			</div>
		</div>
		<div class="container">
		<?php include_once __DIR__ . './forms/addPosts.php' ?>

			
		</div>
	</main>
	<footer role="contentinfo" class="footer">
		<div class="container">
			<span class="text-muted">© Все права защищены.</span>
		</div>
	</footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</html>