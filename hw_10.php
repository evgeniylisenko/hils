<?php 
$arr = [32,22,55,30,89,23,21,77,999,29,65,87,43,92];
// Сумму всех элементов массива.
function arrSum(array $array) :int { 
	$result = 0;

	foreach($array as $value) { 
		if (is_array($value)) { 
			$result += arrSum($value);
		} else { 
			$result += $value;
		}
 	}
 		
	return $result;
}

var_dump(arrSum($arr));
echo '<br / >';

//Среднее всех элементов массива (среднее арифметическое).
function arrSlice(array $array) :float { 
	
	foreach($array as $value) { 
		if (is_array($result = array_slice($array, 0, 14))) { 
			$result = array_sum($result) / sizeof($result);
		} else { 
			$result = $value;
		}
 	}
 	
	return $result;
}

print_r(arrSlice($arr));
echo '<br / >';

//  Вывести 5 минимальных чисел из массива.
$arrMinNumber = $arr;
sort($arrMinNumber);
var_dump(array_slice($arrMinNumber, 0, 5));

echo '<br / >';
//Вывести 5 максимальных чисел из массива.
$arrMaxNumber = $arr;
rsort($arrMaxNumber);
var_dump(array_slice($arrMaxNumber, 0, 5));

//Отсортированный массив по возрастанию.
echo '<br / >';
asort($arr);
print_r($arr);
//Отсортированный массив по убыванию.
echo '<br / >';
arsort($arr);
print_r($arr);