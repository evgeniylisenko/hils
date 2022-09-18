<?php
// Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент, номер которого, передан параметром во всех вложенных массивах.
$arrayOfNum1 = [
	123,
	43,
	32,
	[
		232, 
		"zero", 
		32,
		[
			"one",
			21,
			"six"
		]
	]
];

function getElement(array $arr, int $num) {
	$result = [];

	foreach($arr as $key => $value) { 
		if (is_array($value)) {
			$result = array_merge($result, getElement($value, $num));
		} else if ($key + 1 == $num) {
			array_push($result, $value);
		}
	}

	return $result;
}

var_dump(getElement($arrayOfNum1, 2));


// Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false
$string = 'Parallel structures exist so that either (or both) atomised data and free-text can be accommodated.';

function letterСount(string $str, string $letter) { 
	if (is_string($str)) { 
		return substr_count($str, $letter); 
	} else {
		return	false;
	}			
}
	echo	'<br />';
var_dump(letterСount($string, 'b'));


// Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
$arrayOfNum	=	[
	2, 
	[3, 1, 
		[3, 5], 
		[1, 6],
		'one'	=>	1
	], 
	'two'	=>	2,
	7
];

function coutnNumInArr(array $array) { 
	$result	=	0;

	foreach($array as $value) { 
		if (is_array($value)) {
			$result	+=	coutnNumInArr($value);
		} else {
			$result	+= $value;
		}
	}
	
	return $result;
}
echo	'<br />';
var_dump(coutnNumInArr($arrayOfNum));


//	Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float
function getNumberOfSmallerSquares (int $num1, int $num2) :float { 
	$bigSquare	=	0;
	$smallSquare = 0;	

	if ($num1 > $num2) { 
		$bigSquare	=	pow($num1, 2);
		$smallSquare	=	pow($num2, 2);
	} else {
		$bigSquare	=	pow($num2, 2);
		$smallSquare	= pow($num1, 2);
	}

	return	$bigSquare / $smallSquare;
}
echo	'<br />';
var_dump(getNumberOfSmallerSquares(5, 3));
echo	'<br />';
var_dump(getNumberOfSmallerSquares(9, 13));