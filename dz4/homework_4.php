<?php

/*
1. Дан массив с произвольными числами. Сделайте так, чтобы элемент
повторился в массиве количество раз, соответствующее его числу.
Пример: array(1, 3, 2, 4)​ превратится в array(1, 3, 3, 3, 2, 2, 4, 4, 4,4)​.
*/

echo '<br> ----- 1 -- задание <br>';
$arr = array(1, 2, 3, 4, 5);
function repet_($arr)
{
	$arr_repet = array();
	$count = count($arr) - 1;
	$i = 0;
	$n = null;
	while ($i <= $count) {
		$n = $arr[$i];
		while ($n > 0) {
			$arr_repet[] = $arr[$i];
			$n--;
		}
		$i++;
	}
	print_r($arr_repet);
}

repet_($arr);
echo '<br>';


/*
2. Дан массив с произвольными целыми числами. Сделайте так, чтобы
первый элемент стал ключом второго элемента, третий элемент -
ключом четвертого и так далее. Пример: array(1, 2, 3, 4, 5, 6)
превратится в array(1=>2, 3=>4, 5=>6)​.
*/
echo '<br>  ----- 2 -- задание <br>';

$arr = array(11, 22, 33, 44, 55, 66, 77);
echo 'Исходный массив <br>';
print_r($arr);
echo '<br>';
function arr_motor($arr)
{
	$arr_m = array();
	$count = count($arr) - 1;
	$i = 0;
	$key = null;
	$key_m = null;
	while ($i <= $count) {
		if ($i == 0) {
			$arr_m[$i] = $arr[$i];
		} else {
			$key = $i - 1;
			$key_m = $arr[$key];
			$arr_m[$key_m] = $arr[$i];
		}
		$i++;

	}


	echo '<br> Результат: ';

	print_r($arr_m);
}

arr_motor($arr);
echo '<br>';

/*
3. Дана строка. Удалите из этой строки четные символы.
*/
echo '<br>  ----- 3 -- задание <br>';

function str_even_del($str)
{
	if (is_null($str) or !is_string($str)) {
		return 0;
	}
	$str_del = '';
	$count = strlen($str) - 1;
	$i = 0;
	while ($i <= $count) {
		if (is_float($i / 2) && $count > 0) {
			$str_del .= $str{$i};
		}
		$i++;
	}
	echo '<br> Результат: ', $str_del;
}

$str = 'string';
echo $str;
str_even_del($str);

/*
4. Дана строка. Поменяйте ее первый символ на второй и наоборот,
третий на четвертый и наоборот, пятый на шестой и наоборот и так
далее. То есть из строки '12345678'​ нужно сделать '21436587'​.
*/

echo '<br> <br>  ----- 4 -- задание <br>';


function str_repl($str)
{
	if (is_null($str)) {
		return 0;
	}
	$str_repl = '';
	$count = strlen($str) - 1;
	$i = 0;
	while ($i < $count) {
		$str_repl .= $str{$i + 1};
		$str_repl .= $str{$i};

		if (($i + 2) == $count) {
			$str_repl .= $str{$count};
		}
		$i += 2;

	}


	echo '<br> Результат: ', $str_repl;
}

$str = '123456789';
echo $str;
str_repl($str);

/*
5. Напишите функцию, которая подсчитывает количество всех значений
массива. Функция должна учитывать вложенность массивов. 
(функцией array_count_values пользоваться нельзя).
*/
echo '<br> <br>  ----- 5 -- задание <br>';

function my_count($arr)
{
	if (is_null($arr)) {
		return 0;
	}
	$i = 0;
	foreach ($arr as $value) {
		if (is_array($value)) {
			$i += my_count($value);
		} else {
			$i++;
		}

	}
	return $i;
}

$arr = [1, 2, 3, array(1, 2, 3), 4, 5];
echo my_count($arr);


/*
6. Напишите функцию, которой в параметре  передается
массив из случайных чисел. Функция возвращает массив из
уникальных (не повторяющихся) значений (аналог функции
array_unique).
*/
echo '<br> <br>  ----- 6 -- задание <br>';

function my_arr_uniq($arr)
{
	if (!is_array($arr) or is_null($arr)) {
		return 0;
	}
	$count = count($arr) - 1;
	$i = 0;
	$ii = 0;
	$arr_d = array();
	//$uniq=array();
	//$arr_uniq=array();
	//$arr_uniq=$arr;
	//print_r($arr_uniq);
	while ($i <= $count) {
		$ii = $i + 1;
		while ($ii <= $count) {
			if ($arr[$ii] == $arr[$i]) {
				//nset($arr[$ii]);
				$arr_d[] = $ii;
				//print_r($arr_d);
				//exit;	
			}
			$ii++;
		}
		$i++;
	}
	foreach ($arr_d as $value) {
		unset($arr[$value]);
	}
	return $arr;
}

$arr = [1, 2, 3, 4, 5, 1, 2, 3, 4, 5];

print_r($arr);
echo '<br>';
$arr = my_arr_uniq($arr);
print_r($arr);


/*
7. Напишите функцию, которая будет противоположной array_unique, т.е.
будет оставлять дубликаты, но удалять не повторяющиеся значения.
*/

echo '<br> <br>  ----- 7 -- задание <br>';

function my_arr_dup($arr)
{
	if (!is_array($arr) or is_null($arr)) {
		return 0;
	}
	$arr_dup = $arr;
	foreach ($arr as $key => $value) {
		$repet = 0;
		foreach ($arr_dup as $key_dup => $value_dup) {
			if ($value == $value_dup) {
				$repet++;
			}
		}
		if ($repet < 2) {
			unset($arr[$key]);
		}
	}
	return $arr;
}

$arr = [1, 2, 3, 4, 5, 1, 2, 3, 6, 7, 8, 9, 1, 2, 3];

print_r($arr);
echo '<br>';
$arr = my_arr_dup($arr);
print_r($arr);


/*
8. Напишите функцию, которой передается фамилия имя и отчество, а
функция возвращает фамилию и инициалы. Например, передаем
Ivanov Ivan Ivanovich и нам выводит: Ivanov I. I.
*/

echo '<br> <br>  ----- 8 -- задание <br>';
function fio($fio)
{
	if (is_null($fio)) {
		return 0;
	}
	$s_fio = explode(' ', $fio);
	$fio_reduc = $s_fio[0] . ' ' . $s_fio[1]{0} . '. ' . $s_fio[2]{0} . '.';
	echo '<br>', $fio_reduc;
}


$string = 'Ivanov Ivan Ivanovich';
fio($string);

/*
9. (+1) Таблица умножения. Напишите функцию, которая принимает на
вход два параметра: количество строк и количество колонок. Функция
возвращает​ (не выводит на экран!) таблицу умножения вида
http://joxi.ru/brR577kiJJNRXA. Можно использовать table или div теги
html. Цвет перемножаемых колонок и строк можете задать отдельным
третьим параметром в виде hex-кода цвета.
*/
echo '<br> <br>  ----- 9(+1) -- задание <br><br>';

function arr_multi_table($x, $y)
{
	if (empty($x) || empty($y)) {
		return 0;
	}
	if (($x or $y) == 0) {
		return 0;
	}

	$arr_multi = array();
	/*
$st=0;
$col=0;
while ($x>$st):
	$arr_multi[$st]
	$st++;
	endwhile;
*/
//$col=null;
	?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Blocks</title>
    </head>
    <body>
    <table border="1">

        <tr bgcolor="blue">
			<?php for ($x_str = 1; $x_str <= $x; $x_str++): $arr_multi[] = $x_str; ?>
                <td><?php echo $x_str ?></td>
			<?php endfor; ?>
        </tr>

		<?php for ($y_col = 2; $y_col <= $y; $y_col++): ?>
            <tr>

                <td bgcolor="blue"> <?php echo $y_col ?> </td> <?php for ($y_str = 1; $y_str < $y; $y_str++): ?>
                    <td> <?php echo $y_col * $arr_multi[$y_str]; ?></td> <?php endfor; ?>
            </tr>
		<?php endfor; ?>

    </table>
    </body>
    </html>

	<?php
}

arr_multi_table(10, 10);


/*
10. (+1) Написать рекурсивную функцию, которая на вход получает число
и вычисляет и возвращает​ значение факториала этого числа.
*/
echo '<br> <br>  ----- 10(+1) -- задание <br><br>';

function factorial_($f)
{
	if (empty($f)) {
		return 0;
	}
	$i = 1;
	$ff = 1;
	while ($i < $f) {
		$i++;
		$ff *= $i;
	}
	return $ff;
}

echo factorial_(5);


echo '<br> <br>  ----- 10(+1) - c рекурсией- самостоятельно не додумался подсмотрел <br><br>';



function factorial_recurs($f){
	if($f===0) {
	    return 1;
	}
		return $f * factorial_recurs($f - 1);

}
echo factorial_recurs(5);


/*
11.(+1) Написать функцию (рекурсивную либо обычную - по желанию),
которая принимает на вход параметр (например, $n) и вычисляет
число Фибоначчи до предела $n. Результат вычисления возвращается
этой же функцией.
*/
//// с помощью рекурсии не получается, честно говоря мой мозг ее еще не переварил...
echo '<br> <br>  ----- 11(+1) -- задание <br><br>';


function fibo($n)
{
	if (!is_integer($n)) {
		return 0;
	}
	$i = 2;
	//$fibo_str='';
	$fibo = array(0, 1);
	while ($fibo[$i - 1] < $n) {
		$fibo[] = ($fibo[$i - 1]) + ($fibo[$i - 2]);
		$i++;
	}
	if ($fibo[$i - 1] > $n) {
		unset($fibo[$i - 1]);
	}
	$fibo_str = implode(', ', $fibo);
	return $fibo_str;
}


echo fibo(1000);


/*
12.(+1) Напишите рекурсивную функцию, принимающую на вход
натуральное число $n. Функция возвращает строку из всех чисел от 1
до $n либо от $n до 1. За порядок сортировки должен отвечать
дополнительный параметр функции - $order, который может
принимать значение ‘desc’ (убывающий) или ‘asc’ (возрастающий) и
по-умолчанию должен быть равен ‘desc’.
*/

echo '<br> <br>  ----- 11(+1) -- задание <br><br>';

function nat_namber($n, $order = 'desc')
{
	if (!is_integer($n)) {
		return 0;
	}
	if ($order <> ('asc' or 'desc')) {
		$order = 'desc';
	}
	$i = 1;
	$nat = '';
	if ($order == 'asc') {
		while ($i <= $n) {
			$nat .= $i . ' ';
			$i++;

		}
	} else {
		while ($i <= $n) {
			$nat .= $n . ' ';
			$n--;
		}
	}
	return $nat;
}

echo nat_namber(20, 'sdfs');


?>