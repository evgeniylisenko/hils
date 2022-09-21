<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forms to php</title>
</head>
<body>
	
<h3>Форма данных</h3>
<form action="./action.php" method="POST" enctype="multipart/form-data">
	<input type="text" id="username" name="name" placeholder="Введите свое имя" value="">
	<input type="password" id="password" name="password" placeholder="Введите свой пароль" value="">
	<br>
	<span>Я соглашаюсь на обработку данных</span> <input type="checkbox" name="dataprocessing" value="yes">
	<br>
	<p> Укажите свой пол </p>
	<span> Мужской </span><input type="radio" name="sex" value="men">
	<span> Женский </span><input type="radio" name="sex" value="women">
	<br>
	<button type="submit">Отправить</button>
</form>

</body>
</html>