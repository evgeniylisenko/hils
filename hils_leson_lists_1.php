<?php

$array = [
        ['name' => 'John', 'email' => 'john@admin.com', 'age' => '17'],
        ['name' => 'Kate', 'email' => 'kate@gmail.com', 'age' => '25'],
        ['name' => 'Sam', 'email' =>  'sam@ukr.net', 'age' => '35'],
];


function generateReportTable(array $array) : string
{
    $html = '<table>';
    $html .= '<tr>';
    $arrayKeys = array_keys($array[0]);

    foreach ($arrayKeys as $key) {
        $html .= "<td>$key</td>";
    }
    $html .= '</tr>';

    // name headers
    foreach ($array as $subArray) {
        $html .= '<tr>';
        foreach ($subArray as $value) {
           $html .= "<td>$value</td>" ;
        }
        $html .= '</tr>';
    }

    $html .= '</tabel>';

    return $html;
}

print_r(generateReportTable($array));
exit;
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


</body>
</html>