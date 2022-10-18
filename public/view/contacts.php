<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Страница контактов</title>
</head>
<body>

<h1>Страница контактов тест</h1>

<?php foreach ($contact as $peopleName) : ?>
	<ul>
		<li><?php print_r($peopleName); ?></li>
</ul>
<?php endforeach ?>
	
</body>
</html>