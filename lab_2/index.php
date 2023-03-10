<?php
//Лабораторная работа №2, Король Михаил, 2ПМ
//#1

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order .= "and 15 naggets";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

//#2

$var1 = 35;
echo "\nvar1 = $var1\n";

$v2 = 13.53;
echo "var2 = $var2\n";

echo 10+2,"\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo "В прошлом месяце я потратил на ", ($last_month-$this_month), " больше денег, чем в этом.\n";

//#11

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "Среднее количество дней на язык = $days_per_language\n";

//#12

echo 8**2, "\n";

//#13

$my_num = 7;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "answer = $answer\n";

//#14

$a = 10;
$b = 3;
echo "mod(a,b) = ", $a % $b, "\n";

if( $a % $b == 0)
{
    echo "Делится:\t", $a / $b, "\n";
}
else
{
    echo "Делится с остатком:\t", $a % $b, "\n";
}

$st = pow(2, 10);
echo "2^10 = ", $st, "\n";

echo "sqrt(245) = ", sqrt(245), "\n";

$array = Array(4,2,5,19,13,0,10);
$result = 0;
foreach ($array as $i)
{
    $result += $i**2;
}
echo "sqrt(result) = ", sqrt($result), "\n";

echo "sqrt(379) = ", round(sqrt(379), 0), "\t",
round(sqrt(379), 1), "\t", round(sqrt(379), 2), "\n";

echo "sqrt(587) = ", ceil(sqrt(587)), "\t",
floor(sqrt(379)), "\n";

$array1 = Array('floor' => floor(sqrt(379)), 'ceil' =>ceil(sqrt(587)));

echo "max = ", max(4,-2,5,19,-130,0,10), "\tmin = ", min(4,-2,5,19,-130,0,10), "\n";

echo "Cлучайное число от 1 до 100: ", rand(1,100), "\n";

$array2 = range(1,10);
for ($i=0; $i<10; $i++)
{
    $array2[$i] = rand(1,100);
    echo "array2[$i] = ", $array2[$i], "\t";
}

$a = 64;
$b = 93;
echo "|a-b| = ", abs($a-$b), "\n";

$array3 = Array(1,2,-1,-2,3,-3);
for($i=0; $i < sizeof($array3); $i++)
{
    if($array3[$i] < 0)
    {
        $array3[$i] *= -1;
    }
    echo "array3[$i] = ", $array3[$i], "\t";
}


$del = 42;
$array4 = Array(1);
echo "array[0] = ", 1, "\t";
$count = 0;
for($i=2; $i <= floor(sqrt($del)); $i++)
{
    if($del % $i == 0)
    {
        $array4 = array_pad($array4, sizeof($array4) + 1, $i);
        $count++;
        echo "array4[$count] = ", $array4[$count], "\t";
        $array4 = array_pad($array4, sizeof($array4) + 1, $del / $i);
        $count++;
        echo "array4[$count] = ", $array4[$count], "\t";
    }
}
$array4 = array_pad($array4, sizeof($array4) + 1, 42);
echo "array4[", sizeof($array4)-1, "] = ", 42, "\n";


$array5 = range(1,10);
$number = $array5[0];
for($i=1; $i < 10; $i++)
{
    $number += $array5[$i];
    if( $number > 10)
    {
        echo "Надо сложить", $i+1, " элементов\n";
        break;
    }
}

//#15

function printStringReturnNumber()
{
    echo "Строка\n";
    return 21;
}

$my_num = printStringReturnNumber();
echo "my_num = ", $my_num, "\n";

//#16

function increaseEnthusiasm($string)
{
    return ($string."!");
}
echo increaseEnthusiasm("С днём рождения"), "\n";

function repeatThreeTimes($string)
{
    return ($string.$string.$string);
}
echo repeatThreeTimes("Снова."), "\n";
echo increaseEnthusiasm(repeatThreeTimes("Ура")), "\n";

function cut($string, $num, $p=10)
{
    return mb_substr($string, 0, $num);
}

function recursion($array, $i)
{
    if($i < sizeof($array))
    {
        echo "array[$i] = ", $array[$i], "\t";
        recursion($array, $i+1);
    }
    if($i == 0)
    {
        echo "\n";
    }
    return 0;
}
$array6 = range(1,10);
recursion($array6, 0);

function sum($value)
{

    if($value > 9)
    {
        $result = 0;
        $tmp = $value;

        while($tmp > 0)
        {
            $result += $tmp % 10;
            $tmp = (int)($tmp / 10);
        }
        if($result > 9) {
            $result = sum($result);
        }
        else
        {
            return $result;
        }
    }
    else
    {
        return $value;
    }
}
echo sum(567), "\n";

//#17

$array7 = Array('','','');
for($i = 0; $i < sizeof($array7); $i++)
{
    for($k = $i+1; $k > 0; $k--)
    {
        $array7[$i] .= 'x';
    }
    echo "array7[$i] = ", $array7[$i], "\t";
}
echo "\n";

function arrayFill($value, $length)
{
    if($length > 0)
    {
        $arr = Array($value);
        echo "array[0] = ", $arr[0], "\t";
        for($i = 1; $i < $length; $i++)
        {
            array_push($arr, $value);
            echo "array[$i] = ", $arr[$i], "\t";
        }
        echo "\n";
        return $arr;
    }
    else
    {
        return;
    }

}

$array8 = arrayFill('x', 5);

for($i = 0; $i < 5; $i++)
{
    echo "array8[$i] = ", $array8[$i], "\t";
}
echo "\n";


$array9 = Array(array(1,2,3), array(4,5), array(6));
echo (array_sum($array9[0]) + array_sum($array9[1]) + array_sum($array9[2])), "\n";

$array10 = array();
$count = 1;
for($i = 0; $i < 3; $i++)
{
    array_push($array10, array());
    for($j = 0; $j < 3; $j++)
    {
        array_push($array10[$i], $count);
        $count++;
        echo "array10[$i][$j] = ", $array10[$i][$j], "\t";
    }
}
echo "\n";

$array11 = array(2,5,3,9);
$result = $array11[0]*$array11[1] + $array11[2]*$array11[3];
echo "result = ", $result, "\n";

$user = array('name'=>'Сергей', 'surname' => 'Нечаев', 'patronymic' => 'Владимирович');
echo $user['name'], " ", $user['surname'], " ", $user['patronymic'], "\n";

$date = array('year' => 2023, 'month' => 03, 'day' => 10);
echo $date['year'], ".", $date['month'], ".", $date['day'], "\n";

$array12 = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов массива: ", sizeof($array12), "\n";
echo "Последний элемент массива: ", array_pop($array12), "\n";
echo "Предпоследний элемент массива:", array_pop($arr), "\n";

//#18

function Check($a, $b)
{
    return (($a + $b) > 10);
}
echo Check(3,9) ? 'true' : 'false', "\n";

function areEqual($a, $b)
{
    return ($a == $b) ;
}
echo areEqual(7,7) ? 'true' : 'false', "\n";

$test = 0;
echo (($test == 0) ? 'верно' : ''), "\n";

$age = 21;
if($age < 10 || $age > 99)
{
    echo "Число меньше 10 или больше 99\n";
}
else
{
    echo (array_sum(str_split($age)) <= 9) ? "Сумма цифр однозначна\n" : "Сумма цифр двузначна\n";
}

$arr = range(1,3);

function checkArray($arr)
{
    return (sizeof($arr)==3);
}
echo (checkArray($arr) == 1) ? array_sum($arr) : '';
echo "\n";

//#19

for($i = 1; $i <=20; $i++)
{
    for($j = $i; $j >0; $j--)
    {
        echo "x";
    }
    echo "\n";
}

//#20

$array12 = range(1,10);
echo "Среднее арифметическое = ", (array_sum($array12) / sizeof($array12)), "\n";
echo "Сумма от 1 до 100 = ", (1+100)*100/2, "\n";

$array13 = array(4,9,25,36);
$array14 = array_map("sqrt", $array13);

for($i=0; $i < sizeof($array14); $i++)
{
    echo "array14[$i] = ", $array14[$i], "\t";
}
echo "\n";

$keys = range('a', 'z');
$values = range(1,26);
$array15 = array_combine($keys, $values);
foreach($keys as $i)
{
    echo "array15[$i] = ", $arr[$i], "\t";
}
echo "\n";

$string = '1234567890';
$array16 = str_split($string, 2);
$sum = array_sum($array16);
echo $sum, "\n";

?>