<?php
/*ЗМЕЧАНИЯ

{NOTICE брал, вплывали из-за вывода текста сдеращий $}

Задача 12: не известная переменная $i. {передеал, видимо я его просто ропустил в перерыве, так как выводи хлам и небыло вывода здания}
17я: можно задействовать сразу переменную $e.  {убрал лишнее, не понятное, не нужное действие}
18я: тоже самое.  // реультат copy-wright
19я: подумайте, можно ли решить задачи с помощью одного цикла?
20я: подумайте, можно ли решить задачи с помощью одного цикла?
21я: подумайте, можно ли решить задачи с помощью одного цикла?
24я. В цикле strlen будет выполнятся перед каждым циклом. Если массив очень большой - это займет много памяти.
Чтобы этого избежать, можно сделать так:

Не использоватьфункии в услоиях цикла

*/


/*
1.	Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
*/

echo " -- 1 -- Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик. <br>";
$value=null;
$arr=array('html', 'css', 'php', 'js', 'jq');
foreach($arr as $value){
	 echo  $value  .  '<br>';
	};
/*
2.	Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
*/
echo "<br> -- 2 -- Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную result. <br>";
$s=null;
$result=null;
$arr=array(1, 20, 15, 17, 24, 35);
foreach ($arr as $s) {
	$result=$result+$s;
}
echo $result;

/*
3.	Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.
*/

echo "<br> -- 3 -- Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную result. <br>";
$s=null;
$result=null;
$arr=array(26, 17, 136, 12, 79, 15);
foreach ($arr as $s) {
	$result=$result+$s**2;
}
echo $result;
//не правил



/*
4.	Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
*/
echo "<br> -- 4 -- Дан массив С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов. <br>";
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

$value=null;
foreach ($arr as $key => $value) {
	echo $key,"_____";
	echo  $value  .  '<br>';
} /// аналогично 2 цикла ...


/*
5.	Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'.
*/

echo "<br> -- 5 -- Дан массив arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'. <br>";


$arr = array('Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400');
$value=null;
foreach ($arr as $key => $value) {
	echo $key," - зарплата ";
	echo  $value. " долларов. <br>";
}


/*
6.	Дан массив arr. С помощью цикла foreach запишите английские названия в массив en, а русские — в массив ru.
arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
en = array('green', 'red','blue');
ru = array('зеленый', 'красный', 'голубой');
*/
echo "<br> -- 6 -- 	Дан массив arr. С помощью цикла foreach запишите английские названия в массив en, а русские — в массив ru. <br>";
$i=0;
$en = array();
$ru = array();
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $value) {
	$en[$i] = $key;
	echo $en[$i];
	$ru[$i] = $value;
	echo  " ",$ru[$i], " <br>";
	$i++;
}


/*
7.	Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, значения которых больше 3-х, но меньше 10.
*/
echo "<br> -- 7 -- 	дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, значения которых больше 3-х, но меньше 10. <br>";
$s=null;
$arr=array(2, 5, 9, 15, 0, 4);
foreach ($arr as $s) {
	if ($s>3 && $s<10)
		echo($s), "<br>";
	else
		;
}



/*
8.	Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '-1-2-3-4-5-6-7-8-9-'.
*/
echo "<br> -- 8 -- 	Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '-1-2-3-4-5-6-7-8-9-'. <br>";

$s=null;
$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $s) {
	echo "-",$s;
}
echo "-";



/*
9.	 Выведите столбец чисел от 1 до 100.
*/
echo "<br> -- 9 -- 	Выведите столбец чисел от 1 до 100. <br>";

$i=1;

while ($i <= 100) {
	echo($i), "<br>";
	$i++;
}

/*
10.	Выведите столбец чисел от 11 до 33.
*/
echo "<br> -- 10 -- 	Выведите столбец чисел от 11 до 33. <br>";

$i=11;

while ($i >= 11 && $i <= 33) {
	echo($i), "<br>";
	$i++;
}


/*
11.	Выведите столбец четных чисел в промежутке от нуля до 100.
*/
echo "<br> -- 11 -- 	Выведите столбец четных чисел в промежутке от нуля до 100. <br>";

$i=2;
while ($i<=100) {
	echo($i),"<br>";
	$i+=2;
}


/*
12.	Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.
*/
//замечание
//Задача 12: не известная переменная $i.

echo "<br> -- 12 -- 	Дано число n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную num. <br>";

$num=0;
$n = 1000;
while ($n>=50){
	$n/=2;
	//echo($n),"<br>";
	$num++;
}
echo "<br> Кол-во итераций - ", $num;
echo "<br> Результат деления - ", $n;



/*
13.	Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10.
*/
echo "<br> -- 13 -- 	С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10. <br>";

$s=null;
$arr=array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $s) {
	if ($s>3 and $s<10)
	echo $s, "<br>";
	else
	;
}

/*
14.	Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.
*/
echo "<br> -- 14 -- 	С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'. <br>";

$e=null;
$arr=array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $e) {
	if ($e>=2 and $e<=4 )
	echo "Есть! ", $e, "<br>";
	else
	echo "Нет! <br>";
}


/*
15.	Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.
*/
echo "<br> -- 15 -- 	подсчитайте количество элементов этого массива.. <br>";
$e=null;
$count=0;
$arr=array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $e) {
	$count++;
}
echo($count);

/*
16.	Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9
*/
echo "<br> -- 16 -- 	выведите на экран столбец элементов массива, как показано на картинке. <br>";
$e=null;
$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $e) {
	if ($e<>4 && $e<>7)
		echo $e, ", ";
	else
		echo "<br>",$e, ", ";
}


/*
17.	Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
*/

//17я: можно задействовать сразу переменную $e.

echo "<br> -- 17 -- 	выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной month. <br>";
$e=null;
$month=null;
$arr=array('Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
foreach ($arr as $e) {
	if ($e == 'Февраль'){
		//$month = $e;
		echo "<br> <b> $e </b>";
	}
	else{
		echo "<br>",$e;
	}
}



/*
18.	Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
*/
echo "<br> -- 18 -- 	выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной day. <br>";
$day=null;
$e=null;
$arr=array('Понедельник', 'Вторник', 'Среда','Четверг', 'Пятница','Суббота','Воскресенье');
foreach ($arr as $e) {
	if ($e == 'Суббота'){
		//$day = $e;
		echo "<br> <i> $e</i>";
	}
	else{
		echo "<br>",$e;
	}
}





/*
19.	Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
x
xx
xxx
xxxx
xxxxx
*/


///19я: подумайте, можно ли решить задачи с помощью одного цикла?


echo "<br> -- 19 -- 	Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5. <br>";

$h=1;
//$br=0;
$l=1;
while($h<=20){
		if($l<=$h){
			echo "x";
			$l++;
			continue;
		}
	echo "<br>";
	$h++;
	$l=1;
}




/*
20.	Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
1
22
333
4444
55555
*/
echo "<br> -- 20 -- Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. <br>";

$h=1;
$l=1;
while($h<= 9){
		if($l<=$h){
			echo $h;
			$l++;
			continue;
		}
echo "<br>";
$h++;
$l=1;
}



/*
21.	Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
*/
echo "<br> -- 21 -- Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while. <br>";

$h=1;
$l=1;
while($h<= 5){
		if($l<=$h){
			echo 'xx';
			$l++;
			continue;
		}
echo "<br>";
$h++;
$l=1;
}

/*
22.	(+1) Создайте массив, заполните его случайными значениями (можно использовать функцию rand, например $var  = rand(5, 15)), найдите максимальное и минимальное значение массива и поменяйте их местами.
*/


echo "<br> -- 22 -- 	(+1) Создайте массив, заполните его случайными значениями (можно использовать функцию rand, например var  = rand(5, 15)), найдите максимальное и минимальное значение массива и поменяйте их местами.
 <br>";


$min=null;
$max=null;
$key_min=null;
$key_max=null;
//$value=null;
$i=0;
$arr=array();
while ($i<10) {
	$arr[$i]=rand(2,19);
	$i++;
}
print_r($arr);
echo "<br> ";
$i=0;
$min = $arr[$i];
$max = $arr[$i];
while ($i < 10) {
	if ($arr[$i]<$min){
		$min=$arr[$i];
		$key_min=$i;
	}
	elseif ($arr[$i]>$max){
		$max=$arr[$i];
		$key_max=$i;
	}
	else
		$i++;
}


echo " <br> min - ",$min, " max - ", $max;
echo "<br> ";
$arr[$key_min]=$max;
$arr[$key_max]=$min;
echo "<br> Редактированный массив:  <br>";
print_r($arr);



/*
23.	(+1) Создайте массив и заполните его случайными числами от 1 до 100 (rand). Выведите на экран элементы, значения которых больше нуля и у которых не парный индекс.
Также вычислите произведение тех элементов, значения которых больше нуля и у которых парные индексы (парное число - это число, кратное 2), результат выведите на экран.
*/
echo "<br> <br> -- 23 -- 	(+1) Создайте массив и заполните его случайными числами от 1 до 100 (rand). Выведите на экран элементы, значения которых больше нуля и у которых не парный индекс. Также вычислите произведение тех элементов, значения которых больше нуля и у которых парные индексы (парное число - это число, кратное 2), результат выведите на экран.  <br>";

$p=1;
$i=0;
$arr=array();
while ($i<100) {
	$arr[$i]=rand(1,100);
	if (is_float($i/2) and $arr[$i]>0 or $i==0){
		echo "<br> ",$i," => ",$arr[$i];
	}
	elseif(!is_float($i/2) and $arr[$i]>0){
		$p=$p*$arr[$i];
	}

	else{}
		$i++;
}

echo "<br> Резултат произвеения элементов больше нуля c парным индексом (вар1): ",$p, "<br>";


$p=1;
$i=0;
$arr=array();
while ($i<100) {
	$arr[$i]=rand(1,100);
	if (gettype($i/2)=='double' and $arr[$i]>0 or $i==0){  // помучался пока не нашел "(по историческим причинам в случае типа float возвращается "double", а не просто "float")"
		echo "<br> ",$i," => ",$arr[$i];
	}
	elseif(gettype($i/2)<>'double' and $arr[$i]>0){
		$p=$p*$arr[$i];
	}

	else{}
		$i++;
}
echo "<br> Резултат произвеения элементов больше нуля c парным индексом(вар2): ",$p;
/*
24.	(+1) Дана строка ‘123456789’. С помощью цикла и дополнительной переменной разверните строку так, чтобы в итоге получилось ‘987654321’. Результат выводить после окончания цикла, но не внутри.
*/

echo "<br> <br> -- 24 -- 	(+1) Дана строка ‘123456789’. С помощью цикла и дополнительной переменной разверните строку так, чтобы в итоге получилось ‘987654321’. Результат выводить после окончания цикла, но не внутри.  <br>";

$str = "123456789";
echo "Задана строка:", $str, "<br>";

$i=$j=strlen($str);
$e = "";

while($i > $j/2){
	$e = $str{$i-1};  
	$str{$i-1} = $str{strlen($str)-$i}; 
	$str{strlen($str)-$i} = $e; 
	$i--;
}


echo "Перевернутая строка: ", $str, "<br>";
/// алгоритм решения на мой взгляд кривоватный

/*
25.	(+2) На рисунке ниже представлена таблица.
 
Рекомендуемые шаги при выполнении задачи:

1.	Создайте таблицу с помощью элементов html так чтобы она соответствовала рисунку. В html должны присутствовать блоки HEADER, CONTENT, FOOTER, а также блок с меню с элементами Menu 1, Menu 2, .... Следует учесть, чтобы header, content, footer и меню с элементами были как отдельные html блоки (таблицы или div-блоки - на ваше усмотрение). Для лучшего понимания можете задать для блоков id атрибут с соответствующим именем.
2.	Создайте простой массив $blocks элементами header, content, footer.
3.	С помощью цикла переберите массив $blocks. В процессе перебора элементов необходимо организовать вывод html блоков: для элемента header вывести html блок HEADER, для элемента content вывести html блок CONTENT, для элемента footer - выводится блок FOOTER.
4.	Далее создайте массив $menu из 5 элементов Menu 1, Menu 2, .... . Названия меню могут быть произвольными.
5.	С помощью дополнительного цикла необходимо вклинится в существующую реализацию и вывести элементы массива $menu с соответствующими html блоками.

*/
?>