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