<?php

$x = "9843";
$y = "200";
$c = "200";

function te(){
	global $x;
	echo $x * 10;
	echo "<br>";
	echo $GLOBALS['y'] = $GLOBALS['c'] * 10;
} 
te();
echo "<br>";
echo "hello";
echo "<br>";
echo $y;
echo "<br>";

function te2(){
	static $x = 0;
	echo $x;
	$x++;
}

te2();
echo "<br>";
te2();
echo "<br>";
te2();
echo "<br>";
echo strlen("Hello Google!");
echo "<br>";
echo str_word_count("this defind number of words");
echo "<br>";
echo strrev("I love Google");
echo "<br>";
echo strpos("here we must find word", "must");
echo "<br>";
echo str_replace("30", "20", "10 + 10 = 30   30303033");
echo "<br>";

echo "is_Int";
$xx = 12.34;
$yy = 12;
var_dump(is_int($xx));
echo "<br>";
var_dump(is_integer($yy));
echo "<br>";
var_dump(is_long($yy));
echo "<br>";

echo "is_double";
$zz = 10.0;
var_dump(is_float($yy));
echo "<br>";
var_dump(is_double($zz));
echo "<br>";

echo "Infinite ? Finite";
$nn = 123e2323;
$ww = 12;
echo "<br>";
var_dump($nn);
echo "<br>";
var_dump($ww);
echo "<br>";

echo "Nan - isn`t math number";
echo "<br>";
$q = acos(9);
$e = acos(1/2);
echo "<br>";
var_dump($q);
echo "<br>";
var_dump($e);

echo "<br>";
$r = "123ab";
var_dump(is_numeric($r));
echo "<br>";
var_dump(is_numeric($q));
echo "<br>";
var_dump(is_numeric($e));
echo "<br>";

$int = (int)$xx;
echo $int;
echo intval($xx);
?>