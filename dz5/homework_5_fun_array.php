<?php


//////// На count и range
/*
1. Создайте массив, заполненный числами от 1 до 100.
*/
echo '<br> ----- 1 -- задание Создайте массив, заполненный числами от 1 до 100. <br>';

$arr = range(1, 100, 2);

$str = implode(' ', $arr);

echo 'Результат: ', $str;


/*
2. Дан массив $arr. Подсчитайте количество элементов этого массива.
*/
echo '<br><br> ----- 2 -- задание Подсчитайте количество элементов этого массива. <br>';

$count = count($arr);
echo 'Результат: ', $count;

/*
3. Дан массив $arr. Выведите на экран первый и последний элемент данного массива.
*/

echo '<br><br> ----- 3 -- задание Выведите на экран первый и последний элемент данного массива. <br>';

$first = array_shift($arr);
$last = array_pop($arr);
echo 'Первый элемент: ', $first, '<br>', 'Последний элемент: ', $last;
$str = implode(' ', $arr);

echo '<br> Результат после извлечения: ', $str;


////////На array_sum и array_product
/*
4. Дан массив $arr. С помощью функций array_sum и count найдите среднее арифметическое элементов данного массива.
*/
echo '<br><br> ----- 4 -- задание найдите среднее арифметическое элементов данного массива. <br>';

$average = array_sum($arr) / count($arr);
echo 'Cреднее арифметическое элементов: ', $average;


/*
5. Создайте массив, заполненный числами от 1 до 300. Найдите произведение элементов данного массива.
*/
echo '<br><br> ----- 5 -- задание Создайте массив, заполненный числами от 1 до 300. Найдите произведение элементов данного массива <br>';

$arr_new = range(1, 300, 3);
$str_new = implode(' ', $arr_new);
echo 'Массив: ', $str, '<br>';
$mult = array_product($arr_new);

echo 'Произведение элементов: ', $mult;

////////На array_merge и array_slice
/*
6. Даны два массива: первый с элементами '1', '2', '3', второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами '1', '2', '3', 'a', 'b', 'c'.
*/
echo '<br><br> ----- 6 -- задание Объеденить массивы <br>';

$first_arr = ['1', '2', '3'];
$second_arr = ['a', 'b', 'c'];
echo 'Массив 1: ', implode(' ', $first_arr), '<br>', 'Массив 2: ', implode(' ', $second_arr), '<br>';

function array_comb($arr1, $arr2)
{
    if (!is_array($arr1) or !is_array($arr2)) {
        return 1;
    }
    foreach ($arr2 as $value) {
        array_push($arr1, $value);
    }
    $arr_str = 'Объединенный массив: ' . implode(' ', $arr1);
    return $arr1;

}

echo 'Объединенный массив: ' . implode(' ', array_comb($first_arr, $second_arr));

/*
7. Даны массив с элементами '1', '2', '3', '4', '5'. С помощью функции array_slice создайте массив $b с элементами '2', '3', '4'.
*/
echo '<br><br> ----- 7 -- задание вырезать первый и последний элементы <br>';

$arr = ['1', '2', '3', '4', '5'];
echo implode(' ', array_slice($arr, 1, -1));


///////////На array_keys, array_values, array_combine
/*
8. Дан массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Запишите в массив
$key английские названия цветов, а в $values – русские.
*/
echo '<br><br> ----- 8 -- Запишите в массив key английские названия цветов, а в values – русские. <br>';

$arr = array('green' => 'зеленый', 'blue' => 'голубой', 'red' => 'красный');


print_r($arr);
echo '<br>';
$key = array_keys($arr);
print_r($key);
echo '<br>';
$key1[] = array_keys($arr);
print_r($key1);

echo '<br>';
$values = array_values($arr);
print_r($values);
echo '<br>';
$values1[] = array_values($arr);
print_r($values1);
echo '<br>';
var_dump($values);


/*
9. Даны два массива: 'green', 'blue', 'red' и ''зеленый', 'голубой', 'красный'.
Создайте с их помощью массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Используйте функцию array_combine.
 */

echo '<br><br> ----- 9 -- Вернуть ассоциативный массив с задания 8. <br>';


$arr_combi = array_combine($key, $values);

print_r($arr_combi);


?>