<?php 
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[1] . "<br>";

$thinks[0] = "Book";
$thinks[1] = "Bag";
$thinks[2] = "Copybook";
$thinks[3] = "Notebook";
echo $thinks[0]."<br>";

$age = array("Peter" => "35", "Ben" => "45", "Hellen" => "18");
echo $age['Peter']."<br>";

$yp = array("Peter2", "Ben2", "Hellen2");
$yp['Peter2'] = "12";
$yp['Ben2'] = "13";
$yp['Hellen2'] = "10";
echo $yp["Ben2"]."<br>";
echo "Youg Peter`s age is " . $yp['Peter2'] . "years old."."<br>";

$q = array(
array('1', '2', '3'),
array('4', '5', '6'),
array('7', '8', '9'));
echo $q[0][0]." and ".$q[2][2]."<br>";

sort($cars);
var_dump($cars);
echo "<br>";

rsort($cars);
var_dump($cars);
echo "<br>";

asort($age);
var_dump($age);
echo "<br>";

ksort($age);
var_dump($age);
echo "<br>";

arsort($age);
var_dump($age);
echo "<br>";

krsort($age);
var_dump($age);
echo "<br>";

$grade = 100;
if($grade >= 100 and $grade >= 90){
	echo "Exellent"."<br>";
}elseif($grade < 90 and $grade > 70){
	echo "Good";
}else{
	echo "Satisfied";
}

$color = "blue";
switch($color){
	case "red": echo "Your color red";break;
	case "blue": echo "Your color blue"."<br>"; break;
	case "green": echo "Your color green";
	default: echo "Here doesn`t have your color";
}

$colo = "red";
switch($colo){
	case "red": echo "Your color red";
	case "blue": echo "Your color blue";
	case "green": echo "Your color green";
	default: echo "Here doesn`t have your color <br>";
}

$n = 1;
while($n < 5){
	echo "your number: $n <br>";
	$n++;
}

$m = 5;
do{
	echo "The number: $m will be less <br>";
	$m--;
}while($m >= 0);

for($w = 0; $w < 3; $w++){
	echo "FAANG $w <br>";
}

foreach($cars as $value){
	echo "$value <br>";
}

foreach($age as $key => $value){
	echo "$key - $value<br>";
}

function meWe(){
	echo "Функциянын атын киши-укен кылып жазсада сол функцияны шакырады<br>";
}

MeWe();

function fname($name){
	echo "$name Referense<br>";
}

fname("Jab");
fname("qwer");
fname("QWX");

function setH($in = 50){
	echo "The height is: $in <br>";
}

seth(350);
seth();
seth(10);

function para(int $a, int $b){
	return $a + $b;
}
function para2(string $a, string $b){
	return $a + $b;
}

echo para(5, "5");
echo para2("4 days ", "7");
echo "<br>";

function add(float $a, float $b) : float{
	return $a + $b;
}
function add2(float $a, float $b) : int{
	return $a + $b;
}

echo add(1.2, 2.3);
echo "<br>";
echo add2(1.2, 2.3);

function adnn($value){
	$value += 5;
}

$nnn = 2;
adnn($nnn);
echo $nnn."<br>";

echo "Today`s date is ".date("y/m/d")."<br>";
echo "Today`s date is ".date("y-m-d")."<br>";
echo "Today`s date is ".date("y.m.d")."<br>";
echo "Today`s date is ".date("1")."<br>";

echo "Time is ".date("H:i:s")."<br>";
echo "Time is ".date("h:i:sa")."<br>";
echo "Time is ".date("h:ia")."<br>";
?>