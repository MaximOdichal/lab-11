<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №11 <br> "PHP" </p>

<p align="right">Выполнил: Алексеев М. М.</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Решение задач на JavaScript</p>

<h2 align="center">Цели и задачи</h2>

1.  Создайте переменную $var и присвойте ей значение 'hello'. Обращаясь к отдельным символам этой строки выведите на экран символ 'h', символ 'e', символ 'o'.
2.	Напишите скрипт, который считает количество секунд в часе.
3.	Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:
```php
<?php
	$var = 1;
	$var = $var + 12;
	$var = $var - 14;
	$var = $var * 5;
	$var = $var / 7;
	$var = $var + 1;
	$var = $var - 1;
	echo $var;
?>
```
4.	 Создайте переменную `$a` и присвойте ей значение 3. Выведите значение этой переменной на экран.
5.	Создайте переменные `$a=10` и `$b=2`. Выведите на экран их сумму, разность, произведение и частное (результат деления).
6.	Создайте переменные `$c=15` и `$d=2`. Просуммируйте их, а результат присвойте переменной `$result`. Выведите на экран значение переменной `$result`.
7.	Создайте переменные `$a=10`, `$b=2` и `$c=5`. Выведите на экран их сумму.
8.	 Создайте переменные `$a=17` и `$b=10`. Отнимите от `$a` переменную `$b` и результат присвойте переменной `$c`. Затем создайте переменную `$d`, присвойте ей значение 7. Сложите переменные `$c` и `$d`, а результат запишите в переменную `$result`. Выведите на экран значение переменной `$result`.
9.	Создайте переменную `$text` и присвойте ей значение `'Привет, Мир!'`. Выведите значение этой переменной на экран.
10.	 Создайте переменные `$text1='Привет, '` и `$text2='Мир!'`. С помощью этих переменных и операции сложения строк выведите на экран фразу `'Привет, Мир!'`.
11.	 Создайте переменную `$name` и присвойте ей ваше имя. Выведите на экран фразу `'Привет, %Имя%!'`. Вместо `%Имя%` должно стоять ваше имя.
12.	 Создайте переменную `$age` и присвойте ей ваш возраст. Выведите на экран `'Мне %Возраст% лет!'`.
13.	Создайте переменную `$text` и присвойте ей значение `'abcde'`. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
14.	 Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
15.	 Создайте переменную `$num` и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
16.	Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
17.	 Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
18.	 Создайте переменную, присвойте ей число. Возведите это число в квадрат (это значит нужно умножить его само на себя). Выведите его на экран.
19.	Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
```php
$var = 47;
$var = $var + 7;
$var = $var - 18;
$var = $var * 10;
$var = $var / 20;
echo $var;
```
20.	 Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.
```php
$text = 'Я';
$text = $text.' хочу';
$text = $text.' знать';
$text = $text.' PHP!';
echo $text;
```
21.	 Переделайте этот код так, чтобы в нем использовались операции ++ и --. Количество строк кода при этом не должно измениться.
```php
$var = 10;
$var = $var + 1;
$var = $var + 1;
$var = $var - 1;
echo $var;
```
22.	 Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
```php
$var = 10;
$var = $var + 7;
$var = $var + 1;
$var = $var - 1;
$var = $var + 12;
$var = $var * 7;
$var = $var - 15;
echo $var;
```


<h2 align="center">Решение задач</h2>

```
<?php
	$var = 'hello';
	echo $var[0];
	echo $var[1];
	echo $var[4];
	
	$seconds = 60 * 60;
	echo $seconds;
	
	$var = 1;
	$var += 12;
	$var -= 14;
	$var *= 5;
	$var /= 7;
	$var++;
	$var--;
	echo $var;
	
	$a = 3;
	echo $a;
	
	$a = 10;
	$b = 2;
	echo $a + $b . "<br>";
	echo $a - $b . "<br>";
	echo $a * $b . "<br>";
	echo $a / $b . "<br>";
	
	$c = 15;
	$d = 2;
	$result = $c + $d;
	echo $result;
	
	$a = 10;
	$b = 2;
	$c = 5;
	echo $a + $b + $c;
	
	$a = 17;
	$b = 10;
	$c = $a - $b;
	$d = 7;
	$result = $c + $d;
	echo $result;
	
	$text = 'Привет, Мир!';
	echo $text;
	
	$text1 = 'Привет, ';
	$text2 = 'Мир!';
	echo $text1 . $text2;
	
	$name = 'Максим';
	echo 'Привет, '. $name . '!';
	
	$age = '20';
	echo 'Мне '. $age . ' лет!';
	
	$text = 'abcde';
	echo $text[0] . '<br>';
	echo $text[2] . '<br>';
	echo $text[4] . '<br>';
	
	$text = 'abcde';
	$text[0] = '!';
	echo $text;
	
	$num = '12345';
	echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
	
	$sec_in_hour = 60 * 60;
	$sec_in_day = 24 * $sec_in_hour;
	$sec_in_month = 31 * $sec_in_day;
	echo "Секунд в часе " . $sec_in_hour . "<br>";
	echo "Секунд в дне " . $sec_in_day . "<br>";
	echo"Секунд в месяце " . $sec_in_month . "<br>";
	
	$hour = 12;
	$min = 47;
	$sec = 50;
	echo $hour .':'. $min .':'. $sec;
	
	$num = 5;
	$num*=$num;
	echo $num;
	
	$var = 47;
	$var += 7;
	$var -= 18;
	$var *= 10;
	$var /= 20;
	echo $var;
	
	$text = 'Я';
	$text .=' хочу';
	$text .=' знать';
	$text .=' PHP!';
	echo $text;
	
	$var = 10;
	$var++;
	$var++;
	$var--;
	echo $var;
	
	$var = 10;
	$var += 7;
	$var++;
	$var--;
	$var += 12;
	$var *= 7;
	$var -= 15;
	echo $var;

?>
```

<h2 align="center">Вывод</h2>
В данной лабораторной работе я ознакомился с PHP.
