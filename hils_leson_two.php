<?php 
//посчитать длину массива
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
print_r(count($arr));

echo '<br />';
//переместить первые 4 элемента массива в конец массива
array_push($arr, ...array_splice($arr, 0, 4));
var_dump($arr);


echo '<br />';
//получить сумму 4,5,6 элемента
$newArr = array_splice($arr, 3,	3);
print_r(array_sum($newArr));

$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];

echo '<br />';
// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
var_dump(array_diff($secondArr, $firstArr));

echo '<br />';
// найти все элементы которые присутствую в первом и отсутствуют во втором
var_dump(array_diff($firstArr, $secondArr));

echo '<br />';
// найти все элементы значения которых совпадают 
var_dump(array_intersect($firstArr, $secondArr));

echo '<br />';
// найти все элементы значения которых отличается
var_dump(array_merge(array_diff($firstArr, $secondArr), array_diff($secondArr, $firstArr)));

$firstArr1 = [

  'one' => 1,
  'two' => [
    'one' => 1,
  	'seven' => 22,
  	'three' => 32,
  ],
  'three' => [
		'one' => 1,
		'two' => 2,

  ],
  'foure' => 5,
  'five' => [
   'three' => 32,
   'foure' => 5,
   'five' => 12,
],  

];

echo '<br />';
echo '<br />';
// получить все вторые элементы вложенных массивов
foreach ($firstArr1	as $value) { 
	if (is_array($value)) { 
		var_dump(array_slice($value, 1,1));
	}
}


echo '<br />';
echo '<br />';
// получить общее количество элементов в массиве
function arrLength(array $arr) {
	$result = 0;

	foreach ($arr as $value) {
		if	(is_array($value)) { 
			$result += arrLength($value);
		} else { 
			$result += 1;
		}
	}
	return	$result;
}

var_dump(arrLength($firstArr1));
echo '<br />';
echo '<br />';
// получить сумму всех значений в массиве
function arrRecSum(array $arr) {
	$result = 0;

	foreach ($arr as $value) {
		if	(is_array($value)) { 
			$result += arrRecSum($value);
		} else { 
			$result += $value;
		}
	}
	return	$result;
}

var_dump(arrRecSum($firstArr1));
