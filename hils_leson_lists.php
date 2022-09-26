<?php
$array = [1,2,3,4,5,6,7,8,9,10];
$arrayDaysOfWeek = ['Понедельник','Вторник','Среда','Четверг','Пятница'];

$nameList = "Залоловок списка";
$listType = 'ul';

function listToArray(array $array, string $nameList, string $listType) : string {

		$html = "<h3>$nameList</h3>";
    $html .= "<$listType>";

    foreach ($array as $value) {
        $html .= "<li>$value</li>";
    }

		$html .= "</$listType>";

    return  $html;

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ДЗ 6. Функция для генерации html списков</title>
</head>
<body>

<?php

print_r(listToArray($array,$nameList,$listType));
?>

