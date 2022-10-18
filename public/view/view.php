<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=Те, initial-scale=1.0">
	<title>Тестовая страница</title>
</head>
<body>
	<h1>I'm User</h1>

	<?php foreach($people as $currentPeople) :?>
		<ul>
			<li><?php print_r($currentPeople); ?></li>
		</ul>
		<?php endforeach; ?>
</body>
</html>