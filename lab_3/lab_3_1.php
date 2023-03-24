<?php
//Пункт А
$string = "gbdhwmdjaghbsddewagtbqwregabbbwqwerqaqwbqw";
echo $string;
echo "<br>";
$regexp = '!a[a-z]{2}b!';
$mathces = array();
$count = preg_match_all($regexp,$string,$matches);
var_dump($matches);
echo "<br>";
echo "<br>";

//Пункт Б
$string1 = "a1b2c3";
$regexp = "![0-9]{1,}!";
function cube($s){
    
    return ($s[0]**3);
}
echo preg_replace_callback($regexp,'cube',$string1);
?>