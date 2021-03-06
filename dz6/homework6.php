<?php
/*
Создайте html-форму. Сделайте на форме два поля ввода Date 1 и Date 2.
Через поля ввода будут передаваться даты в формате 'год-месяц-день'.
Добавьте на форму два элемента типа radio.
Задайте элементы label для этих кнопок: dd.mm.YY и YY.mm.dd соответственно.
Радио кнопки будут отвечать за формат даты, в котором будут выводится даты пользователю на экран.
Данные, которые передаются формой либо через адресную строку, необходимо проверять на корректность (валидировать) на сервере.
Валидацию можно проводить единожды и затем использовать для решения задач.
По клику на кнопку sumbit вам необходимо выполнить следующие задачи:
*/
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DZ-6</title>
    </head>
    <body>
    <form method="post">
        <p> Дата 1: </p><label><input pattern="\d{1,2}-\d{1,2}-\d{1,4}" name="date1"/> день-месяц-год </label> <br><br>
        <p> Дата 2: </p><label><input  pattern="\d{1,4}-\d{1,2}-\d{1,2}" name="date2"/> год-месяц-день </label> <br>
        <p> Формат даты </p>
        <label><input type="radio" value="dmy" name="date_format"/> dd.mm.YY <label/>
            <label><input type="radio" value="ymd" name="date_format"/> YY.mm.dd <label/>
                <input type="submit" /> <br><br>
    </form>

    </body>
    </html>


<?php
/*
1.	Пользователь вводит число, а скрипт определяет високосный ли год.
Сделать проверку на формат и количество введенных значений. Если есть ошибка - уведомить об этом пользователя.
*/
echo '<br><br> ----- 1.	Пользователь вводит число в дата 1, а скрипт определяет високосный ли год. 
Сделать проверку на формат и количество введенных значений. Если есть ошибка - уведомить об этом пользователя. <br>';

if (!empty($_POST['date1'])) {
    $arr_date1 = explode('-', $_POST['date1']);
    $date_nx = mktime(0, 0, 0, $arr_date1[1], $arr_date1[0], $arr_date1[2]);
    if (date("L", $date_nx) == 1) {
        echo $arr_date1[2] . ' leap year.';
    } else {
        echo $arr_date1[2] . ' not leap year.';
    }
}
/*
2.	Пользователь передает две даты. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше.
 С помощью функций explode и mktime переведите большую дату в формат timestamp.
По этому timestamp узнайте день недели (словом, латиницей) и выведите его на экран.
*/
echo '<br><br> ----- 2. Сравнить две даты, для большей,	узнайте день недели (словом, латиницей) и выведите его на экран <br>';
if (!empty($_POST['date1']) and !empty($_POST['date2'])){
    $date1= explode('-', $_POST['date1']);
    $date2= explode('-', $_POST['date2']);
    $date1_nx = mktime(0,0,0,$date1[1],$date1[0],$date1[2]);
    $date2_nx = mktime(0,0,0,$date2[2],$date2[0],$date2[1]);
    if(($date1_nx-$date2_nx)<=0){
        echo $_POST['date1'].' date is longer. Day of the week - ' .date('l',$date1_nx);
    }
    else{
        echo $_POST['date2'].' date is longer. Day of the week - ' .date('l',$date2_nx);
    }
}
/*
3.	В поле вводится дата. Прибавьте к этой дате 1 год 2 месяца и 3 дня. Отнимите от этой даты 5 дней. Результат преобразуйте ее в выбранный формат и отобразите на экране.
*/


/*
4.	С помощью адресной строки передайте GET-параметр date, который хранит год (4 числа). Посчитайте сколько воскресений в введенном году приходится на первое число месяца.
*/


/*
5.	С помощью адресной строки передайте GET-параметр date, который хранит год (4 числа). Найдите все пятницы 13-е в этом году. Результат выведите в виде списка дат.
*/


/*
6.	Дан GET-параметр date, в который вводится год. Узнайте, какой это будет год по восточному календарю. Результат выведите на экран.
*/


/*
7.	Пользователь в форму вводит дату, например, 2017-01-01. Найдите количество дней, часов, минут, секунд, прошедших с 2017-01-01 23:59:59 до настоящего момента.
*/


/*
8.	Пользователь в форму вводит дату. Узнайте какой день недели был 100 лет назад.
*/


/*
9.	Создайте html-форму. Добавьте на форму 4 элемента с типом checkbox, сгруппированных с помощью элемента fieldset. Чекбоксы должны иметь названия: html, css, php, javascript. Названия чекбоксам задаются с помощью элемента label. Спросите у пользователя, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь. Если пользователь не отметил ни один язык — выведите на экран сообщение об этом.
*/


/*
10.	Создайте html-форму. Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок. Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен.
*/


/*
11.	Создайте html-форму. Спросите у пользователя его возраст с помощью нескольких radio-кнопок, сгруппированных элементом fieldset. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30. Результат выдайте на экран в видет “Ваш возраст в диапазоне <n> лет”.
*/


/*
12.	Создайте html-форму. Спросите у пользователя его возраст с помощью select. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.
*/


/*
13.	Создайте html-форму. Спросите у пользователя с помощью элемента multiselect, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь.
*/


/*
14.	Сделайте функцию, которая создаёт html элемент. Функция должна иметь следующие параметры: type, name, value, placeholder. В функцию на вход может попасть только input или textarea. В любом другом случае необходимо вывести предупреждение об ошибке.
*/


/*
15.	Сделайте функцию, которая будет создавать селект. Функция должна принимать многомерный массив, например:
$arr = array(
    0=>array('value'=>'php', 'text'=>'Язык PHP'),
    1=>array('value'=>'html', 'text'=>'Язык HTML'),
)
*/


?>